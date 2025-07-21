<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'name' => 'Rina Marlina',
            'email' => 'rina@example.com',
            'nim' => '2203040101',
        ]);

        Student::create([
            'name' => 'Andi Wijaya',
            'email' => 'andi@example.com',
            'nim' => '2203040102',
        ]);

        Student::create([
            'name' => 'Siti Rahma',
            'email' => 'siti@example.com',
            'nim' => '2203040103',
        ]);
    }
}
