<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //please note this is cutomize for the admin not for users
            [
                'name'=>'isiaka ibrahim',
                'email'=>'isiaka@gmail.com',
                'password'=>Hash::make('password'),
                'amount'=>'4000',
            ],
            //for the agent 1
            [
                'name'=>'adedipe adedamola isreal',
                'email'=>'damola@gmail.com',
                'password'=>Hash::make('password'),
                'amount'=>'4000',
            ],

            //for the agent 2

            [
                'name'=>'Gbogboade Ayomide',
                'email'=>'ayomide@gmail.com',
                'password'=>Hash::make('password'),
                'amount'=>'4000',
            ],

            //for the overrall users coordinator ...this is the customize login details

            [
                'name'=>'mr wale oronti',
                'email'=>'mworonti@gmail.com',
                'password'=>Hash::make('password'),
                'amount'=>'4000',
            ],
        ]);
    }
}
