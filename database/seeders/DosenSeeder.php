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
                'nrp' => '25161616',                         
                'nama' => 'Lula Rania Salsabilla',
                'email' => 'salsabillalula@gmail.com',
                'kelas' => 'D4 LJ Teknik Informatika - B',
                'tanggal_lahir' => '2001-03-20',
            ],
            [
                'nrp' => '32640045',                         
                'nama' => 'Luly Rini Siii',
                'email' => 'lulaaa@gmail.com',
                'kelas' => 'D4 Teknik Komputer',
                'tanggal_lahir' => '2001-10-25',
            ],
        ];

        foreach ($dosen as $dosen) {
            DB::table('dosens')->insert($dosen);
        }
    }
}
