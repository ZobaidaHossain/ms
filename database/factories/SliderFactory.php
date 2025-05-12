<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'title' => $this->faker->sentence,
            // 'image' => 'https://picsum.photos/1400/480?random=' . $this->faker->randomNumber(),
            // 'sub_title' => $this->faker->sentence,
            // 'link' => $this->faker->url,
            // 'status' =>  $this->faker->randomElement([0, 1]),
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ];
    }
}
