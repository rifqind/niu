<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColumnGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $column_groups = [
            ['id' => 1, 'label' => 'Jenis ASN'],
            ['id' => 2, 'label' => 'Jenis Kelamin'],
        ];
    }
}
