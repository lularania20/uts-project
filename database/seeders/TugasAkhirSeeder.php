<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TugasAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tugasAkhir = [
            [
                'id_mahasiswa' => 1,                         
                'id_dosen_pembimbing_1' => 1,
                'id_dosen_pembimbing_2' => 2,
                'judul' => 'Sistem Pendukung Keputusan Deteksi Hama',
                'metode' => 'Decision Tree',
                'created_at' => '2023-04-1 14:09:11',
                'updated_at' => '2023-04-1 14:09:11'
            ],
            [
                'id_mahasiswa' => 2,                         
                'id_dosen_pembimbing_1' => 2,
                'id_dosen_pembimbing_2' => 1,
                'judul' => 'Penyimpanan Datawarehouse',
                'metode' => 'Database',
                'created_at' => '2023-04-1 14:09:11',
                'updated_at' => '2023-04-1 14:09:11'
            ],
        ];

        foreach ($tugasAkhir as $tugasAkhir) {
            DB::table('tugas_akhirs')->insert($tugasAkhir);
        }
    }
}
