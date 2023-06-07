<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->words(3,true);
        $slug = Str::slug($title);
        return [
            Category::FIELD_TITLE => $title,
            Category::FIELD_SLUG => $slug,
        ];
    }
}
