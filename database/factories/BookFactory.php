<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence($this->faker->numberBetween(2,5));
        return [
            'title' => $title,
            'original_title' => $title,
            'isbn' => $this->faker->ean8(),
            'isbn_13' => $this->faker->ean13(),
            'original_publication_year' => $this->faker->year(),
            'language_code' => $this->faker->languageCode(),
            'image_url' => $this->faker->word(),
        ];
    }
}
