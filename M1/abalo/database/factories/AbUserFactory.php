<?php

namespace Database\Factories;

use App\Models\AbUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class AbUserFactory extends Factory
{
    protected $model = AbUser::class;

    public function definition()
    {
        return [
            'ab_name' => $this->faker->unique()->name(),
            'ab_password' => 'password123',
            'ab_mail' => $this->faker->unique()->safeEmail,
        ];
    }
}

