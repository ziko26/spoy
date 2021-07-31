@extends('layouts.admin.admin')
@section('title', 'All Users')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
        <div class="card">
            <div class="card-body card-dashboard">
            @if(count($users) >= 1)
                <table
                    class="table table-striped display nowrap table-busered scroll-horizontal dataTable">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Statut</th>
                        <th>creation date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                     
                      @foreach($users as $user)
                      <tr> 
                          <td>{{$user->fullName}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->phone}}</td>
                          <td>{{$user->city->name}}</td>
                          <td>{!!$user->getActive()!!}</td>
                          <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
                          
                          <td>
                              edit
                          </td>
                      </tr>   
                      @endforeach    
                     
                    </tbody>
                </table>
                @else
               <p class="text-center">No user</p>                                   
                @endif
            </div>
            </div>
        </div>
    </div>
</div

@endsection