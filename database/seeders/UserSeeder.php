<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->upsert(
            array(
                [
                    'id' => 1,
                    'first_name' => "Abdullah",
                    'last_name' => "Hafeez",
                    'email' => "abdullah@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 1, // Patient
                    'password' => Hash::make('12345678'),
                    'address' => 'Address 123 etc',
                    'cnic' => '35202-1234567-8',
                    'date_of_birth' => '1996-12-08'
                ],
                [
                    'id' => 2,
                    'first_name' => "Muhammad",
                    'last_name' => "Daniyal",
                    'email' => "daniyal@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 1, // Patient
                    'password' => Hash::make('12345678'),
                    'address' => 'Address 123 etc',
                    'cnic' => '35202-1234567-8',
                    'date_of_birth' => '1996-12-08'
                ],
                [
                    'id' => 3,
                    'first_name' => "Ahmad",
                    'last_name' => "Zulfiqar",
                    'email' => "ahmad@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 1, // Patient
                    'password' => Hash::make('12345678'),
                    'address' => 'Address 123 etc',
                    'cnic' => '35202-1234567-8',
                    'date_of_birth' => '1996-12-08'
                ],
                [
                    'id' => 4,
                    'first_name' => "Ghulam",
                    'last_name' => "Mustafa",
                    'email' => "gulam@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 1, // Patient
                    'password' => Hash::make('12345678'),
                    'address' => 'Address 123 etc',
                    'cnic' => '35202-1234567-8',
                    'date_of_birth' => '1996-12-08',
                ],
                [
                    'id' => 5,
                    'first_name' => "Dr. Ali",
                    'last_name' => "Anjum",
                    'email' => "ali@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 2, // Doctor
                    'password' => Hash::make('12345678'),
                    'address' => null,
                    'cnic' => null,
                    'date_of_birth' => null,
                ],
                [
                    'id' => 6,
                    'first_name' => "Dr. Hafsa",
                    'last_name' => "Hashmi",
                    'email' => "hafsa@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 2, // Doctor
                    'password' => Hash::make('12345678'),
                    'address' => null,
                    'cnic' => null,
                    'date_of_birth' => null,
                ],
                [
                    'id' => 7,
                    'first_name' => "Prf. Muhammad",
                    'last_name' => "Kahlil",
                    'email' => "kahlil@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 2, // Doctor
                    'password' => Hash::make('12345678'),
                    'address' => null,
                    'cnic' => null,
                    'date_of_birth' => null,
                ],
                [
                    'id' => 8,
                    'first_name' => "Dr.",
                    'last_name' => "Ismail",
                    'email' => "ismail@gmail.com",
                    'phone_number' => "03000000000",
                    'user_type' => 2, // Doctor
                    'password' => Hash::make('12345678'),
                    'address' => null,
                    'cnic' => null,
                    'date_of_birth' => null,
                ],
            ),
            ['email'],
            ['id','first_name','last_name','email','phone_number','password','user_type','address','cnic','date_of_birth']
        );
    }
}
