<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    // Define A Guarded Variable
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
