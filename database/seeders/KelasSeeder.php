<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = ['X', 'XI', 'XII'];

        for( $i = 0; $i < count($kelas); $i++ ) {
            Kelas::create([
                'nama_kelas' => $kelas[$i]
            ]);
        }
    }
}
