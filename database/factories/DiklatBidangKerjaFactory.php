<?php

namespace Database\Factories;

use App\Models\DiklatBidangKerja;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiklatBidangKerjaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiklatBidangKerja::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_jenis' => $this->faker->word,
        'kode_bidang' => $this->faker->word,
        'kode_kerja' => $this->faker->word,
        'nama_kerja' => $this->faker->word,
        'status_aktif' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
