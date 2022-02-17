<?php

namespace Database\Factories;
use App\Models\Ocjena;
use Illuminate\Database\Eloquent\Factories\Factory;

class OcjenaFactory extends Factory
{   /**
    *The name of the factory's corresponding model.
    *
    * @var string

    */
    protected $model = Ocjena::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'code' => $this->faker->unique()->numberBetween(1,200),
             'date' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null),
             'grade' => $this->faker->numberBetween(6,10),
             'predmet' => $this->faker->numberBetween(1,3),
             'student' => $this->faker->numberBetween(1,10),
             'edukator' => $this->faker->numberBetween(1,10),



        ];
    }
}
