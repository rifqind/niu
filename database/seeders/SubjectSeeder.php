<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedData = [
            ['label' => 'Kemiskinan'],
            ['label' => 'Sosial'],
            ['label' => 'Geografi'],
            ['label' => 'Ketenagakerjaan'],
            ['label' => 'Administrasi'],
            ['label' => 'Pendidikan'],

        ];

        Subject::insert($seedData);
    }
}
