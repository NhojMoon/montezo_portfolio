<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;   


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = 'admin';
        $name = 'Nelson John A. Montezo 1';
        $email = 'nj.montezo12@gmail.com';
        $birthday = 'August 25, 2002';
        $age = '21';
        $gender = 'Male';
        $phone = '+6396 7615 9289';
        $address = 'Bagong Lipunan, Hilongos, Leyte';
        $zip_code = '6524';
        $religion = 'Roman Catholic';
        $status = 'Single';
        $fb_url = 'https://www.facebook.com/nelson.love.3152';
        $instagram_url = 'https://www.instagram.com/nhoj.moon/';
        $linkedin_url = 'https://www.linkedin.com/in/nelson-john-montezo-1-6921aa261';
        $github_url = 'https://github.com/NhojMoon';

        DB::table('users')->insert ([
            [
                'role' => $role,
                'name' => $name,
                'email' => $email,
                'birthday' => $birthday,
                'age' => $age,
                'gender' => $gender,
                'phone' => $phone,
                'address' => $address,
                'zip_code' => $zip_code,
                'religion' => $religion,
                'status' => $status,
                'fb_url' => $fb_url,
                'linkedin_url' => $linkedin_url,
                'github_url' => $github_url,
                'password' => Hash::make('012345'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}