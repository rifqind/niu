<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MasterDesa;
use App\Models\MasterKabupaten;
use App\Models\MasterKecamatan;
use App\Models\MasterProvinsi;
use App\Models\MasterWilayah;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
                // \App\Models\User::factory(10)->create();

                // \App\Models\User::factory()->create([
                //     'name' => 'Test User',
                //     'email' => 'test@example.com',
                // ]);
                $this->call(ColumnSeeder::class);
                $this->call(DatacontentSeeder::class);
                $this->call(DinasSeeder::class);
                $this->call(RegionSeeder::class);
                $this->call(RowSeeder::class);
                $this->call(TabelSeeder::class);
                $this->call(TurtahunSeeder::class);
                $this->call(DatacontentSeeder::class);
                $this->call(DinasSeeder::class);
                $this->call(RegionSeeder::class);
                $this->call(SubjectSeeder::class);
                $this->call(MasterProvinsi::class);
                $this->call(MasterKabupaten::class);
                $this->call(MasterKecamatan::class);
                $this->call(MasterDesa::class);
                $this->call(MasterWilayah::class);
        }
}
