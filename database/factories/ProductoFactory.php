<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo'        => $this->faker->numberBetween(1, 1000000),
            'CodBarras'     => $this->faker->ean13(),
            'name'          => $this->faker->sentence(1),
            'descripcion'   => $this->faker->sentence(5),
            'Unid_med_id'   => $this->faker->numberBetween(1, 4),
            'cantidad'      => $this->faker->numberBetween(1, 50),
            'valor'         => $this->faker->numberBetween(10000, 100000),
            'iva_id' => $this->faker->numberBetween(1, 4) 
        ];
    }
}
