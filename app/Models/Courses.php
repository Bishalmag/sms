<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $table ='courses';
    protected $fillable = [
        'course_name',
        'course_code',
        'faculty_id'
    ];


public function faculty()
{
    return $this->belongsTo(Faculties::class, 'faculty_id', 'faculty_id');
}
public function students()
{
    return $this->belongsToMany(students::class, 'enrollments');
}
public function enrollments()
{
    return $this->hasMany(Enrollments::class);
}
}
