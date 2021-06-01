<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->firstName,
            'document' => Str::random(10),
            'city' => $this->faker->city,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->unique()->phoneNumber,
        ];        
    }
}
