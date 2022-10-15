<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    // Define A Guarded Variable
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = ['teacher', 'lessons', 'category'];

     // Course With Relation Category Model (One to One)
     public function category()
     {
         return $this->belongsTo(Category::class, 'category_id', 'id');
     }
    // Course With Relation User Model (One to One)
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
    // Course With Relation Lessons Model (One to Many)
    public function lessons()
    {
        return $this->hasMany(Lessons::class, 'course_id', 'id');
    }

}
