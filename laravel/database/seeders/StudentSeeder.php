<?php

namespace Database\Seeders;
 use App\Models\Students;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   

public function run()
{
    Students::create([
        'name' => 'Alice Johnson',
        'email' => 'alice@example.com',
        'course' => 'Computer Science',
    ]);

    Students::create([
        'name' => 'Bob Smith',
        'email' => 'bob@example.com',
        'course' => 'Mathematics',
    ]);

    Students::create([
        'name' => 'Charlie Brown',
        'email' => 'charlie@example.com',
        'course' => 'Physics',
    ]);
}

}
