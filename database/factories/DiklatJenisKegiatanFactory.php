<?php

namespace Database\Factories;

use App\Models\DiklatJenisKegiatan;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiklatJenisKegiatanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiklatJenisKegiatan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_kegiatan' => $this->faker->word,
        'nama_kegiatan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
