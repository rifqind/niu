<?php

namespace Database\Seeders;

use App\Models\MasterKabupaten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterKabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kab_data = array(
            0 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'label' => 'BOLAANG MONGONDOW',
                'kelas' => 'KABUPATEN',
            ),
            1 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'label' => 'MINAHASA',
                'kelas' => 'KABUPATEN',
            ),
            2 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'label' => 'KEPULAUAN SANGIHE',
                'kelas' => 'KABUPATEN',
            ),
            3 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'label' => 'KEPULAUAN TALAUD',
                'kelas' => 'KABUPATEN',
            ),
            4 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'label' => 'MINAHASA SELATAN',
                'kelas' => 'KABUPATEN',
            ),
            5 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'label' => 'MINAHASA UTARA',
                'kelas' => 'KABUPATEN',
            ),
            6 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'label' => 'BOLAANG MONGONDOW UTARA',
                'kelas' => 'KABUPATEN',
            ),
            7 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'label' => 'SIAU TAGULANDANG BIARO',
                'kelas' => 'KABUPATEN',
            ),
            8 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'label' => 'MINAHASA TENGGARA',
                'kelas' => 'KABUPATEN',
            ),
            9 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'label' => 'BOLAANG MONGONDOW SELATAN',
                'kelas' => 'KABUPATEN',
            ),
            10 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'label' => 'BOLAANG MONGONDOW TIMUR',
                'kelas' => 'KABUPATEN',
            ),
            11 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'label' => 'MANADO',
                'kelas' => 'KOTA',
            ),
            12 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'label' => 'BITUNG',
                'kelas' => 'KOTA',
            ),
            13 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'label' => 'TOMOHON',
                'kelas' => 'KOTA',
            ),
            14 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'label' => 'KOTAMOBAGU',
                'kelas' => 'KOTA',
            ),
            15 =>
            array(
                'prov' => '71',
                'kab' => '00',
                'label' => 'SULAWESI UTARA',
                'kelas' => 'PROVINSI',
            ),
        );
        foreach ($kab_data as $key => $value) {

            try {

                MasterKabupaten::create($value);
            } catch (\Exception $th) {
                continue;
            }
        }
    }
}
