<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudentScholarship;

class StudentScholarshipSeeder extends Seeder
{
    public function run(): void
    {
        StudentScholarship::create([
            'student_id' => 1,
            'scholarship_id' => 1,
            'awarded_at' => now(),
        ]);

        StudentScholarship::create([
            'student_id' => 2,
            'scholarship_id' => 1,
            'awarded_at' => now(),
        ]);

        StudentScholarship::create([
            'student_id' => 3,
            'scholarship_id' => 2,
            'awarded_at' => now(),
        ]);
    }
}
