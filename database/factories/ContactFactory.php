<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'street' => $this->faker->streetName(),
            'house_nr' => $this->faker->buildingNumber(),
            'zip_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'email' => $this->faker->safeEmail(),
            'phone_nr' => $this->faker->e164PhoneNumber(),
            'user_id' => User::factory(),
            'public' => $this->faker->randomElement(['yes', 'no']),
        ];
    }
}
