<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculties extends Model
{
    use HasFactory;
    protected $table ='faculties';
    protected $fillable = [
        'faculty_id',
        'name',
        'email',
        'phone'];

        public function courses()
{
    return $this->hasMany(Courses::class, 'faculty_id', 'faculty_id');
}
}


