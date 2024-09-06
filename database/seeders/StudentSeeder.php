<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // It also create time stamps
        // student::create([
        //     'name' => 'Ali',
        //     'email' => 'ali@gmail.com'
        // ]);


        //---------------------------------


        // $students = collect(
        //     [
        //         [
        //             'name' => 'Saeed',
        //             'email' => 'saeed@gmail.com'
        //         ],
        //         [
        //             'name' => 'Aaiz',
        //             'email' => 'aaiz@gmail.com'
        //         ],
        //         [
        //             'name' => 'Azob',
        //             'email' => 'azib@gmail.com'
        //         ]
        //     ]
        // );

        // $students->each(function($student){
        //     // It does not add time stamps
        //     student::insert($student);
        // });

        //---------------------------------------------

        // $json = File::get("database/json/student-data.json");
        // $data = collect(json_decode($json));

        // $data->each(function($student){
        //     student::create([
        //         'name'=> $student->name,
        //         'email' => $student->email
        //     ]);
        // });

        //----------------------------------------------
        // insrting fake data

        // for($i = 0; $i < 100; $i++){
        //     student::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->email()
        //     ]);
        // }

        // ----------------------------------------------
        // Fake data using factory
        student::factory(12)->create();

    }
}
