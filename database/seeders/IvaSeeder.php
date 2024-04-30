<?php

namespace Database\Seeders;

use App\Models\Iva;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ivaMOdel          = new Iva();
        $ivaMOdel->descIva = 'Excento (0.00%)';
        $ivaMOdel->save();

        $ivaMOdel1          = new Iva();
        $ivaMOdel1->descIva = 'Bienes/Servicios al 5 (5.00%)';
        $ivaMOdel1->save();

        $ivaMOdel2          = new Iva();
        $ivaMOdel2->descIva = 'Contratos Firmados con el estado antes de Ley 1819 (16%)';
        $ivaMOdel2->save();

        $ivaMOdel3          = new Iva();
        $ivaMOdel3->descIva = 'Tarifa General (19%)';
        $ivaMOdel3->save();
    }
}
