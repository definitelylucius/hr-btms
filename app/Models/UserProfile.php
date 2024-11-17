<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'user_profiles';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'progress',
    ];

    // If you want to hide certain attributes from array or JSON conversions
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}