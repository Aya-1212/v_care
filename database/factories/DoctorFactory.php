<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $major = rand(1,100);
        return [
            'name' => fake()->name(),
            'email'=> fake()->unique()->safeEmail(),
            'image'=> "1.jpeg",
            'location'=> fake()->url(),
            'description'=> fake()->text(),
            'major_id'=> $major,
        ];
    }
}
