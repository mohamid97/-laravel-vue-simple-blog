<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            User::create([
                'firstName'=>'Mohamed',
                'lastName'=>'Ahmed',
                'email'=>'m@gmail.com',
                'userName'=>'mohamed',
                 'password'=>Hash::make('mohamed')
            ]);
        }

}
