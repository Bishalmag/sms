<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $fillable = [
        'student_id',
        'course_id'
    ];
    public function student()
{
    return $this->belongsTo(Students::class);
}

public function course()
{
    return $this->belongsTo(Courses::class);
}
}
