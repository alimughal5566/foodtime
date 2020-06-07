<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('users')->insert([

                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'type' => 'admin',
                'password' => Hash::make('123123123'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);

        DB::table('users')->insert([

            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => now(),
            'type' => 'admin',
            'password' => Hash::make('123123123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);


            DB::table('users')->insert([
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'email_verified_at' => now(),
                'type' => 'customer',
                'password' => Hash::make('123123123'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);


        DB::table('users')->insert([
            'name' => 'Customer1',
            'email' => 'customer1@gmail.com',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => Hash::make('123123123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Customer2',
            'email' => 'customer2@gmail.com',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => Hash::make('123123123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);


        DB::table('users')->insert([
            'name' => 'Customer3',
            'email' => 'customer3@gmail.com',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => Hash::make('123123123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Customer4',
            'email' => 'customer4@gmail.com',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => Hash::make('123123123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Customer5',
            'email' => 'customer5@gmail.com',
            'email_verified_at' => now(),
            'type' => 'customer',
            'password' => Hash::make('123123123'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);



        }
    }
