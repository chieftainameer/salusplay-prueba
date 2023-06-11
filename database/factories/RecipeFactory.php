<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
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
            Recipe::FIELD_TITLE => $title,
            Recipe::FIELD_SLUG => $slug,
            Recipe::FIELD_THUMBNAIL => $this->faker->image(public_path('images'),300,300,'food',false),
            Recipe::FIELD_PREPARATION_TIME => $this->faker->numberBetween(30,180),
            Recipe::FIELD_NUM_OF_RATIONES => $this->faker->numberBetween(1,5),
            Recipe::FIELD_INGREDIENTS => $this->faker->words($this->faker->numberBetween(3,9),true),
            Recipe::FIELD_PROCEDURE => $this->faker->text(400),
            Recipe::FIELD_PUBLISHED_AT => now(),
        ];
    }
}
