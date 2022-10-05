<?php

namespace Database\Factories;

use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lessons>
 */
class LessonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = fake()->sentence(rand(2,5));
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'content' => fake()->sentence(rand(1,2), true),
         //    It True Means To Show Text Formate
            'course_id' => Courses::all()->random(),
        ];
    }
}
