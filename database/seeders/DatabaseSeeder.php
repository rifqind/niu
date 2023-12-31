<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // $this->call(DatacontentSeeder::class);
        // $this->call(DinasSeeder::class);
        // $this->call(RegionSeeder::class);
        $this->call(SubjectSeeder::class);
    }
}
