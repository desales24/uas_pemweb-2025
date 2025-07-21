<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scholarship;
use Carbon\Carbon;

class ScholarshipSeeder extends Seeder
{
    public function run(): void
    {
        Scholarship::insert([
            [
                'name' => 'Beasiswa Prestasi Nasional',
                'description' => 'Beasiswa untuk mahasiswa berprestasi di tingkat nasional.',
                'provider' => 'Kemendikbud',
                'start_date' => Carbon::create(2025, 1, 1),
                'end_date' => Carbon::create(2025, 3, 31),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beasiswa Unggulan Daerah',
                'description' => 'Beasiswa untuk siswa dari daerah tertinggal dan perbatasan.',
                'provider' => 'Pemerintah Daerah',
                'start_date' => Carbon::create(2025, 4, 1),
                'end_date' => Carbon::create(2025, 6, 30),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Scholarship for International Students',
                'description' => 'Scholarship for outstanding international students.',
                'provider' => 'International Foundation',
                'start_date' => Carbon::create(2025, 7, 1),
                'end_date' => Carbon::create(2025, 9, 30),
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
