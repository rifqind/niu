<?php

namespace Database\Seeders;

use App\Models\TurTahunGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurtahunGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_seed = [
            ['id' => 1, 'label' => 'Semester'],
            ['id' => 2, 'label' => 'Tahun'],
            ['id' => 3, 'label' => 'Bulan'],
        ];
        TurTahunGroup::insert($data_seed);
    }
}
