<?php

namespace Database\Seeders;

use App\Models\Row;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $rows = [
            [
                'label' => 'Kecamatan A',
                'id_rowlabels' => '2'
            ],
            [
                'label' => 'Kecamatan B',
                'id_rowlabels' => '2'
            ],
            [
                'label' => 'Kecamatan c',
                'id_rowlabels' => '2'
            ],
            [
                'label' => 'Desa A',
                'id_rowlabels' => '3'
            ],
            [
                'label' => 'Desa B',
                'id_rowlabels' => '3'
            ],
            [
                'label' => 'Desa c',
                'id_rowlabels' => '3'
            ],
            [
                'label' => 'Kab. Bolaang Mongondow',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Minahasa',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Kepulauan Sangihe',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Kepulauan Talaud',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Minahasa Selatan',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Minahasa Utara',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Bolaang Mongondow Utara',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Kepulauan Siau Tagulandang Biaro',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Minahasa Tenggara',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Bolaang Mongondow Selatan',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kab. Bolaang Mongondow Timur',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kota Manado',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kota Bitung',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kota Tomohon',
                'id_rowlabels' => '1'
            ],
            [
                'label' => 'Kota Kotamobagu',
                'id_rowlabels' => '1'
            ],
        ];
        foreach ($rows as $row) {
            Row::create($row);
        }
    }
}
