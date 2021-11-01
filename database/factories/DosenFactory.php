<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=>$this->faker->text(),
            'nidn'=>$this->faker->text(),
            'alamat'=>$this->faker->date(),
            'kontak'=>$this->faker->text(),
            'create_at'=>$this->faker->date(),
            'update_at'=>$this->faker->date(),
    
        ];
    }
}
