<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'fullName' => 'Administration',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

      $cities =  [

            [
                'name' => 'Agadir',
                'slug' => 'agadir'
            ],
            [
                'name' => 'Casablanca',
                'slug' => 'casablanca'
            ],
            [
                'name' => 'Marakech',
                'slug' => 'marakech'
            ],
          
           
        ];

        DB::table('cities')->insert($cities);
    }
}
