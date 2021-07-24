<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Collection;
use App\User;

class AdminController extends Controller
{

    public function index(){
       $users = User::all();
       $ActiveUsers = User::where('active',1)->get();
       //Retrieve Most Visited Pages
        $pages = Analytics::fetchMostVisitedPages(Period::days(1));
        //retrieve visitors and pageview data for the current day and the last fifteen days
        $visitors = Analytics::fetchVisitorsAndPageViews(Period::days(15));
        // Retrieve Total Visitors and Page Views
        $total_visitors = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        //retrieve sessions and pageviews with yearMonth dimension since 1 year ago
        $analyticsData = Analytics::performQuery(
        Period::years(1),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions, ga:pageviews',
                'dimensions' => 'ga:yearMonth'
            ]
        );
       return view('admin.dashboard')->with([
           'users' => $users,
           'ActiveUsers' => $ActiveUsers,
           'pages' => $pages,
           'visitors' => $visitors,
           'total_visitors' => $total_visitors,
           'analyticsData' => $analyticsData
       ]);
    }

    public function showLogin(){
        return view('admin.auth.login');

    }

    protected function login(LoginRequest $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect() -> route('admin.dashboard');
        }
      
        return redirect()->back()->withInput()->with(['error' => 'Email or password inccorect']);
    }


    public function adminLogout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('show.admin.login');
    }
}
