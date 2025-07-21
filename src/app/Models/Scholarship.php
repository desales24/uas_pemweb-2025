<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'provider',     
        'start_date',   
        'end_date',     
        'is_active',
    ];

    public function recipients()
    {
        return $this->hasMany(StudentScholarship::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_scholarship')
                    ->withPivot('awarded_at')
                    ->withTimestamps();
    }
}
