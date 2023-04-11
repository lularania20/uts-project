<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
                'nrp' => '2516161671',                         
                'nama' => 'Lula Rania Salsabilla',
                'email' => 'salsabillalula@gmail.com',
                'kelas' => 'D4 LJ Teknik Informatika - B',
                'tanggal_lahir' => '2001-03-20',
                'created_at' => '2023-04-1 14:09:11',
                'updated_at' => '2023-04-1 14:09:11'
            ],
            [
                'nrp' => '32640045',                         
                'nama' => 'Luly Rini Siii',
                'email' => 'lulaaa@gmail.com',
                'kelas' => 'D4 Teknik Komputer',
                'tanggal_lahir' => '2001-10-25',
                'created_at' => '2023-04-1 14:09:11',
                'updated_at' => '2023-04-1 14:09:11'
            ],
        ];

        foreach ($mahasiswa as $mahasiswa) {
            DB::table('mahasiswas')->insert($mahasiswa);
        }
    }
}
