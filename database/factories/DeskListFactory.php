<?php

namespace Database\Factories;

use App\Models\Desk;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'desk_id' => Desk::all()->random()->id,
            'name' => $this->faker->word
        ];
    }
}
