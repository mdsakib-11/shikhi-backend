<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
// All Courses Get
   public function courses(){
    return [
        'error' => false,
        'courses' => Courses::get()
    ];
   }
// Single Courses Get
   public function singleCourse($slug)
   {
    // single coures find process
    $course = Courses::where('slug', $slug)->get()->first();
    return [
        'error' => false,
        'course' => $course
    ];
   }


}
