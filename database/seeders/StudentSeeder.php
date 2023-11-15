<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $students = collect([
            [
                "name" => "bikash",
                "email" => "contact1@gmail.com",
                "password" => "123"
            ],
            [
                "name" => "arun",
                "email" => "contact2@gmail.com",
                "password" => "123"
            ],
            [
                "name" => "singhaniya",
                "email" => "contact3@gmail.com",
                "password" => "123"
            ]
        ]);
        // student::create([
        //     "name" => "singhaniya",
        //     "email" => "contact@gmail.com",
        //     "password" => "123"
        // ]);
        $students->each(function ($student) {
            student::insert($student);
        });
    }
}
