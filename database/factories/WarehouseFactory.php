<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,3)),
            'slug' => $this->faker->slug(),
            'harga' => $this->faker->numberBetween(11000, 32000),
            'stock' => $this->faker->numberBetween(5,100),
            'excerpt' => $this->faker->sentence(mt_rand(3,6)),
            'description' => $this->faker->paragraph(),
            'location_id' => mt_rand(1,3),
            'type_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,10),
        ];
    }
}
