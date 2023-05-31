<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'employee_code' => fake()->unique()->numberBetween(100,999),
          'first_name' => fake() ->firstName(),
          'middle_name' => fake()->firstName(),
          'last_name' => fake() ->lastName(),
          'password' => fake() ->password(),
          'depar_id' => fake() ->numberBetween(1,10)#Department::factory()
           
            //
        ];
    }
}
