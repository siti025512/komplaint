<?php

namespace Database\Factories;

use App\Models\Complaint;
use app\Models\ActionStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title' => fake()->sentence(),
            'description' => fake()->sentence(),
            //
        ];
    }
}
