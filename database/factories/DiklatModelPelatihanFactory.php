<?php

namespace Database\Factories;

use App\Models\DiklatModelPelatihan;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiklatModelPelatihanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiklatModelPelatihan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_model' => $this->faker->word,
        'nama_model' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
