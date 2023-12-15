<?php

namespace Database\Seeders;

use App\Models\Rowlabel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RowLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $row_labels = [

            ['id' => 1, 'label' => 'Kabupaten/Kota'],
            ['id' => 2, 'label' => 'Kecamatan',],
            ['id' => 3, 'label' => 'Desa',],

        ];
        foreach ($row_labels as $item) {
            Rowlabel::create($item);
        }
    }
}
