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
// Single Coures Get
   public function singleCourse($id)
   {
    // single coures find process
    $course = Courses::findOrfail($id);
    return [
        'error' => false,
        'course' => $course
    ];
   }


}
