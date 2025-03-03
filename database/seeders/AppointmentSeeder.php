<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments')->upsert(
            array(
                [
                    'id' => 1,
                    'patient_id' => 1,
                    'doctor_id' => 5,
                    'first_name' => 'Abdullah',
                    'last_name' => 'Hafeez',
                    'email' => 'abdullah@gmail.com',
                    'mobile' => '03000000000',
                    'gender' => 'Male',
                    'address' => 'Address',
                    'date' => '2025-03-04',
                    'from' => '10:00',
                    'to' => '11:00',
                    'treatment' => 'Treatment'
                ],
                [
                    'id' => 2,
                    'patient_id' => 2,
                    'doctor_id' => 5,
                    'first_name' => 'Muhammad',
                    'last_name' => 'Daniyal',
                    'email' => 'daniyal@gmail.com',
                    'mobile' => '03000000000',
                    'gender' => 'Male',
                    'address' => 'Address',
                    'date' => '2025-03-04',
                    'from' => '10:00',
                    'to' => '11:00',
                    'treatment' => 'Treatment'
                ],
                [
                    'id' => 3,
                    'patient_id' => 3,
                    'doctor_id' => 5,
                    'first_name' => 'Ahmad',
                    'last_name' => 'Zulfiqar',
                    'email' => 'ahmad@gmail.com',
                    'mobile' => '03000000000',
                    'gender' => 'Male',
                    'address' => 'Address',
                    'date' => '2025-03-04',
                    'from' => '10:00',
                    'to' => '11:00',
                    'treatment' => 'Treatment'
                ],
                [
                    'id' => 4,
                    'patient_id' => 1,
                    'doctor_id' => 5,
                    'first_name' => 'Abdullah',
                    'last_name' => 'Hafeez',
                    'email' => 'abdullah@gmail.com',
                    'mobile' => '03000000000',
                    'gender' => 'Male',
                    'address' => 'Address',
                    'date' => '2025-02-25',
                    'from' => '10:00',
                    'to' => '11:00',
                    'treatment' => 'Treatment'
                ],
                [
                    'id' => 5,
                    'patient_id' => 2,
                    'doctor_id' => 5,
                    'first_name' => 'Muhammad',
                    'last_name' => 'Daniyal',
                    'email' => 'daniyal@gmail.com',
                    'mobile' => '03000000000',
                    'gender' => 'Male',
                    'address' => 'Address',
                    'date' => '2025-02-25',
                    'from' => '10:00',
                    'to' => '11:00',
                    'treatment' => 'Treatment'
                ],
                [
                    'id' => 6,
                    'patient_id' => 3,
                    'doctor_id' => 5,
                    'first_name' => 'Ahmad',
                    'last_name' => 'Zulfiqar',
                    'email' => 'ahmad@gmail.com',
                    'mobile' => '03000000000',
                    'gender' => 'Male',
                    'address' => 'Address',
                    'date' => '2025-02-25',
                    'from' => '10:00',
                    'to' => '11:00',
                    'treatment' => 'Treatment'
                ],
            ),
            ['id'],['patient_id', 'doctor_id', 'first_name', 'last_name', 'email', 'mobile', 'gender', 'address', 'date', 'from', 'to', 'treatment']
        );
    }
}
