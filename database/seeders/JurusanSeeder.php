<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = ['RPL', 'DKV', 'TSM', 'TKKR', 'MP', 'BD', 'AK'];

        for($i = 0; $i < count($jurusans); $i++) {
            Jurusan::create([
                'nama_jurusan' => $jurusans[$i]
            ]);
        }
    }
}
