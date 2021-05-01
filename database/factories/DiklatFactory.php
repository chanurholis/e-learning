<?php

namespace Database\Factories;

use App\Models\Diklat;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiklatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diklat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis_diklat' => $this->faker->word,
        'bidang_pelatihan' => $this->faker->word,
        'jenis_kegiatan' => $this->faker->word,
        'model_palatihan' => $this->faker->word,
        'kode_diklat' => $this->faker->word,
        'kode_profil' => $this->faker->word,
        'nama_diklat' => $this->faker->word,
        'tahun' => $this->faker->word,
        'jenjang' => $this->faker->word,
        'syarat_peserta' => $this->faker->text,
        'syarat_wi' => $this->faker->text,
        'deskripsi' => $this->faker->text,
        'tujuan_diklat' => $this->faker->text,
        'keterangan' => $this->faker->text,
        'status_aktif' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
