<?php

namespace Database\Factories;

use App\Models\Diklat-Jenis;
use Illuminate\Database\Eloquent\Factories\Factory;

class Diklat-JenisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diklat-Jenis::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_jenis' => $this->faker->word,
        'nama_jenis' => $this->faker->word,
        'status_aktif' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
