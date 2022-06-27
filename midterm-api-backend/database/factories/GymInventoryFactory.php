<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GymInventory>
 */
class GymInventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'lastname'=>$this->faker->lastname,
            'address'=>$this->faker->streetAddress,
            'number'=>$this->faker->phoneNumber,
            'temperature'=>$this->faker->numberBetween(27,37),
        ];
    }
}
