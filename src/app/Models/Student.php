<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'nim',
    ];

    public function scholarships()
    {
        return $this->belongsToMany(Scholarship::class, 'student_scholarship')
                    ->withPivot('awarded_at')
                    ->withTimestamps();
    }

    public function studentScholarships()
    {
        return $this->hasMany(StudentScholarship::class);
    }
}
