<?php

namespace Database\Factories;
use App\Models\Edukator;

use Illuminate\Database\Eloquent\Factories\Factory;

class EdukatorFactory extends Factory
{   /**
    *The name of the factory's corresponding model.
    *
    * @var string

    */
    protected $model = Edukator::class;



    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Sara', 'Lejla', 'Ena','Azra','Esma', 'Iman', 'Tajra','Amna','Hana', 'Dalija', 'Emina','Sajra','Šejla', 'Adna', 'Belma','Amar','Dani', 'Imran', 'Harun','Edin','Ahmed', 'Anes', 'Malik','Daris','Eman', 'Kenan', 'Adis','Admir','Arman', 'Emrah', 'Dino','Tarik']),
            'lastName' => $this->faker->randomElement(['Hodžić ', 'Kovačević ', 'Marković ','Delić ','Hadžić ', 'Savić ', 'Halilović ','Babić ','Bašić ', 'Avdić ', 'Begić ','Brkić ','Ramić ', 'Alić ', 'Imamović ','Karić ','Dedić ', 'Bošnjak ', 'Selimović ','Spahić ']),
             'title'=>$this->faker->randomElement(['asistent', 'v. asistent', 'doc.dr','van.prof.dr.','red.prof.dr.']),
             'mail' => $this->faker->unique()->safeEmail(),

        ];
    }
}
