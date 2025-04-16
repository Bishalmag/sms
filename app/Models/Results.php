<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $table ='results';
    protected $fillable = [
        'student_id',
        'course_id',
        'term',
        'marks',
        'grade'
    ];
    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    // 🔗 Relationship to course
    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
