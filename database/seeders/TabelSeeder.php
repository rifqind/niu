<?php

namespace Database\Seeders;

use App\Models\Tabel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tabels = [
            [
                'nomor' => 'TBD',
                'label' => 'Jumlah Klinik Keluarga Berencana (KKB) dan Pos Pelayanan Keluarga Berencana Desa (PPKBD) Menurut Kabupaten/Kota',
                'unit' => 'Unit',
                'id_dinas' => '1',
                'id_subjek' => '1'
            ]
        ];
        foreach($tabels as $tabel){
            Tabel::create($tabel);
        }
    }
}
