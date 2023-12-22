<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            DosenSeeder::class,
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
            RelationSeeder::class,
            UserSeeder::class,
        ]);
    
   }

}