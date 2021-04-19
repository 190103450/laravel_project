<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model;

class BookloverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Booklover::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         'name' => $this->faker->name,
         'email' => $this->faker->unique()->safeEmail,
         'address' => $this->faker->address,
          'choose' => $this->faker->numberBetween($min = 1, $max = 2),
           'bookAutor' => $this->faker->text(30),
            'bookName' => $this->faker->text(15),
             'amount' => $this->faker->randomDigitNot(0)
        ];
    }
}
