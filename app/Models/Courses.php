<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    // Define A Guarded Variable
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = ['teacher', 'lessons'];
    // Course With Relation User Model
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
    // Course With Relation Lessons Model
    public function lessons()
    {
        return $this->hasMany(Lessons::class, 'course_id', 'id');
    }
}
