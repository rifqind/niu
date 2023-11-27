<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $regions = [
            [
                'kode' => '7100',
                'nama' => 'Provinsi Sulawesi Utara'
            ],
            [
                'kode' => '7101',
                'nama' => 'Kab. Bolaang Mongondow'
            ],
            [
                'kode' => '7102',
                'nama' => 'Kab. Minahasa'
            ],
            [
                'kode' => '7103',
                'nama' => 'Kab. Kepulauan Sangihe'
            ],
            [
                'kode' => '7104',
                'nama' => 'Kab. Kepulauan Talaud'
            ],
            [
                'kode' => '7105',
                'nama' => 'Kab. Minahasa Selatan'
            ],
            [
                'kode' => '7106',
                'nama' => 'Kab. Minahasa Utara'
            ],
            [
                'kode' => '7107',
                'nama' => 'Kab. Bolaang Mongondow Utara'
            ],
            [
                'kode' => '7108',
                'nama' => 'Kab. Kepulauan Siau Tagulandang Biaro'
            ],
            [
                'kode' => '7109',
                'nama' => 'Kab. Minahasa Tenggara'
            ],
            [
                'kode' => '7110',
                'nama' => 'Kab. Bolaang Mongondow Selatan'
            ],
            [
                'kode' => '7111',
                'nama' => 'Kab. Bolaang Mongondow Timur'
            ],
            [
                'kode' => '7171',
                'nama' => 'Kota Manado'
            ],
            [
                'kode' => '7172',
                'nama' => 'Kota Bitung'
            ],
            [
                'kode' => '7173',
                'nama' => 'Kota Tomohon'
            ],
            [
                'kode' => '7174',
                'nama' => 'Kota Kotamobagu'
            ],
        ];
        foreach($regions as $region){
            Region::create($region);
        }
    }
}
