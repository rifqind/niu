<?php

namespace Database\Seeders;

use App\Models\Column;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $columns = [
            [
                'label' => 'KKB'
            ],
            [
                'label' => 'PPKBD'
            ]
        ];
        foreach($columns as $column){
            Column::create($column);
        }
    }
}
