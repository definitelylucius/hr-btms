<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applicants';

    protected $fillable = [
        'name',
        'email',
        'status', // e.g., 'new', 'screening', 'interview', 'hired'
        // Add other fields as required
    ];
}