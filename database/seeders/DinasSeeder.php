<?php

namespace Database\Seeders;

use App\Models\Dinas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Dinas = [
            [
                'nama' => 'Dinas Kependudukan, Percatatan Sipil, dan KB Provinsi Sulawesi Utara',
                'id_regions' => '1'
            ],
            [
                'nama' => 'Dinas Kesehatan Provinsi Sulawesi Utara',
                'id_regions' => '1'
            ],
            [
                'nama' => 'Dinas Komunikasi, Informasi, Persandian, dan Statistik Provinsi Sulawesi Utara',
                'id_regions' => '1'
            ],
        ];
        foreach($Dinas as $din){
            Dinas::create($din);
        }
    }
}
