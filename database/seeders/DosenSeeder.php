<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            [
                'nip' => '25161616',                         
                'nama' => 'Lia Kurnia',
                'email' => 'liakurnia@gmail.com',
                'bidang' => 'Machine Learning',
                'tanggal_lahir' => '1995-05-30',
                'created_at' => '2023-04-1 14:09:11',
                'updated_at' => '2023-04-1 14:09:11'
            ],
            [
                'nip' => '32640045',                         
                'nama' => 'Ayana Ashifa',
                'email' => 'ayanan@gmail.com',
                'bidang' => 'Database',
                'tanggal_lahir' => '1987-04-17',
                'created_at' => '2023-04-1 14:09:11',
                'updated_at' => '2023-04-1 14:09:11'
            ],
        ];

        foreach ($dosen as $dosen) {
            DB::table('dosens')->insert($dosen);
        }
    }
}
