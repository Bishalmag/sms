<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'name',
        'student_id',
        'email',
        'phone',
        'address',
        'created_by',
        
    ];

public function creator()
{
        return $this->belongsTo(User::class, 'created_by');
}
    public function courses()
{
    return $this->belongsToMany(courses::class, 'enrollments');
}
public function enrollments()
{
    return $this->hasMany(Enrollments::class);
}

}
