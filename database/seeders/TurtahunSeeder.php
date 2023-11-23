<?php

namespace Database\Seeders;

use App\Models\Turtahun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurtahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $turtahuns = [
            [
                'label' => '00',
                'type' => 'Tahun'
            ]
        ];
        foreach($turtahuns as $turtahun){
            Turtahun::create($turtahun);
        }
    }
}
