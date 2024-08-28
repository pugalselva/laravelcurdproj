<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// add the fillable attribute with field names as shown below
// The attributes that are mass assignable.

class Student extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'email',
        'address',
        'phone',
    ];
}
