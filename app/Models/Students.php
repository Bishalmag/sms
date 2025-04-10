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
        'email',
        'phone',
        'address',
        'created_by',
        
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
