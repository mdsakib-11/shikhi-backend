<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
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
           'description' => fake()->paragraphs(rand(1,3), true),
        //    It True Means To Show Text Formate
           'requirements' => fake()->paragraphs(rand(1,3), true),
           'audience' => fake()->paragraphs(rand(1,3), true),
           'category_id' => rand(1,20),
           'teacher_id' => 1,
           'thumbnail' => 'https://source.unsplash.com/random/400*250?men,women&'.rand(2,32563),




        ];
    }
}
