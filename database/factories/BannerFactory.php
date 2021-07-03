<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->unique()->slug(),
            'photo'=> $this->faker->imageUrl('60', '60'),
            'description' => $this->faker->sentence('67'),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'conditions' => $this->faker->randomElement(['banner', 'promo']),
        ];
    }
}
