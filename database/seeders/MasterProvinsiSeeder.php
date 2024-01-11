<?php

namespace Database\Seeders;

use App\Models\MasterProvinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prov_data = array([
            'prov' => '71',
            'label' => 'SULAWESI UTARA'
        ]);
        MasterProvinsi::insert($prov_data);
    }
}
