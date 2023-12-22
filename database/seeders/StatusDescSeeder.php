<?php

namespace Database\Seeders;

use App\Models\StatusDesc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusDescSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['id' => 1, 'label' => 'Tabel Baru'],
            ['id' => 2, 'label' => 'Dalam Proses Entri'],
            ['id' => 3, 'label' => 'Diperiksa oleh Supervisor'],
            ['id' => 4, 'label' => 'Perlu Perbaikan'],
            ['id' => 5, 'label' => 'Final'],
        ];
        StatusDesc::insert($statuses);
    }
}
