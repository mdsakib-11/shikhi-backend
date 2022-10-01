<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{

   public function courses(){
    return [
        'error' => false,
        'courses' => Courses::get()
    ];
   }
}
