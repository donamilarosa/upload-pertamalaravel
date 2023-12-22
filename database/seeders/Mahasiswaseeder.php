<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('mahasiswas')->insert([
            'npm' => '2201170001',
            'nama' => 'Dona mila rosa',
            'alamat' => 'sijunjung',
            'no_hp' => '08122222',
        ]);
    }
}