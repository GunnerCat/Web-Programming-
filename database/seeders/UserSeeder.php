<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'Pieter Riyanto',
                'email'=>"admin@gmail.com",
                'password'=> '$2y$10$I/bdz88GJeCbqpxSJU/xgu3zm1tTquqAfccLGH8jxHN5DIbKSUEUq',
                'gender'=>'Male',
                'admin'=>true,
                'dob'=>'2022-10-10',
                'country_id'=> 10,
            ],
            [
                'name'=>'user',
                'email'=>"user@gmail.com",
                'password'=> '$2y$10$I/bdz88GJeCbqpxSJU/xgu3zm1tTquqAfccLGH8jxHN5DIbKSUEUq',
                'gender'=>'Male',
                'admin'=>false,
                'dob'=>'2022-10-10',
                'country_id'=> 10,
            ],

        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
