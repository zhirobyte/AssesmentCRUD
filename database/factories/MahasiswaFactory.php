<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
        'nama'=>$this->faker->text(),
        'nim'=>$this->faker->text(),
        'tanggal_lahir'=>$this->faker->date(),
        'alamat'=>$this->faker->text(),
        'tahun_masuk'=>$this->faker->text(),
        'create_at'=>$this->faker->date(),
        'update_at'=>$this->faker->date(),

        ];
    }
}
