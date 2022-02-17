<?php

namespace Database\Factories;
use App\Models\Predmet;

use Illuminate\Database\Eloquent\Factories\Factory;

class PredmetFactory extends Factory
{   /**
    *The name of the factory's corresponding model.
    *
    * @var string

    */
    protected $model = Predmet::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Elektronika','Digitalna elektronika','Ekonomika']),

        ];
    }
}
