<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;


class StudentFactory extends Factory
{
     /**
    *The name of the factory's corresponding model.
    *
    * @var string

    */
    protected $model=Student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {

        return [
            'index'=> $this->faker->unique()->numberBetween(100,1800),
            'name' => $this->faker->randomElement(['Sara', 'Lejla', 'Ena','Azra','Esma', 'Iman', 'Tajra','Amna','Hana', 'Dalija', 'Emina','Sajra','Šejla', 'Adna', 'Belma','Amar','Dani', 'Imran', 'Harun','Edin','Ahmed', 'Anes', 'Malik','Daris','Eman', 'Kenan', 'Adis','Admir','Arman', 'Emrah', 'Dino','Tarik']),
            'lastName' => $this->faker->randomElement(['Hodžić ', 'Kovačević ', 'Marković ','Delić ','Hadžić ', 'Savić ', 'Halilović ','Babić ','Bašić ', 'Avdić ', 'Begić ','Brkić ','Ramić ', 'Alić ', 'Imamović ','Karić ','Dedić ', 'Bošnjak ', 'Selimović ','Spahić ']),
            'BDate' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = '-18 years', $timezone = null),
            'JMBG'=> $this->faker->unique()->numberBetween(1000000000000,9999999999999),
            'address' => $this->faker->randomElement(['Ulica bosanskih banova', 'Harmanska ulica', 'Ulica harmanskih šehida','Ulica Ešrefa Kovačevića','Ulica AVNOJ-a', 'Ulica Mehmedalije Maka Dizdara', 'Ulica ZAVNOBiH-a','Ulica dr. Mehmeda Tatlića','Ulica Husrefa Redžića', 'Ulica Džemala Bijedića', 'Ulica Nade Klaić','Ulica Nikole Tesle','Ulica 17. maja', 'Ulica Besima Korkuta', 'Ulica Midhata Begića','Ulica Safeta Krupića']),
            'city' => $this->faker->randomElement([ 'Bihać', 'Cazin']),
            'country' => 'BiH',
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber,
            'phone' => $this->faker->phoneNumber,
            'status'=> $this->faker->unique()->numberBetween(1,10),

        ];
    }
}
