<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Status;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
      /**
    *The name of the factory's corresponding model.
    *
    * @var string

    */
    protected $model=Status::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {

        return [
            'dateEnrollment' => $this->faker->dateTimeBetween($startDate = '-5 years', $endDate = '-1 years', $timezone = null),
            'modeOfStudy' => $this->faker->randomElement(['Redovan','Samofinansirajući','Vanredni']),
            'studyProgram' => $this->faker->randomElement([ 'Informatika', 'Automatika', 'Energetika']),


        ];
    }
}
