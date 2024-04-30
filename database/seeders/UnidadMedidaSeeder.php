<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnidadMedida;


class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidadMedida = new UnidadMedida();
        $unidadMedida->descUnidMedida = 'Metro';
        $unidadMedida->save();

        $unidadMedida2 = new UnidadMedida();
        $unidadMedida2->descUnidMedida = 'Unidad';
        $unidadMedida2->save();

        $unidadMedida3 = new UnidadMedida();
        $unidadMedida3->descUnidMedida = 'Litro';
        $unidadMedida3->save();

        $unidadMedida4 = new UnidadMedida();
        $unidadMedida4->descUnidMedida = 'Kilogramo';
        $unidadMedida4->save();
    }
}
