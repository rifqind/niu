<?php

namespace Database\Seeders;

use App\Models\Datacontent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatacontentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $datas = [
            [
                'label' => '1-1-1-2023-1',
                'value' => '98'
            ],
            [
                'label' => '1-1-2-2023-1',
                'value' => '87'
            ],
        ];
        foreach($datas as $data){
            Datacontent::create($data);
        }
    }
}
