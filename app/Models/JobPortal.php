<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPortal extends Model
{
    use HasFactory;

    // Define your fillable attributes or other model properties here
    protected $fillable = [
        'title',
        'department',
        'salary',
        'description',
        'vacancies',
    ];
}