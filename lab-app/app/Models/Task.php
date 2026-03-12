<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // mass assignable attributes
    protected $fillable = [
        'title',
        'description',
        'is_completed',
    ];
}
