<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'class_id',
        'section_id' ,
        'name',
        'photo',
        'email',
        'password',
        'photo',
        'address',
        'gender'
    ];
}
