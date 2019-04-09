<?php

use Illuminate\Database\Seeder;

class PerdirDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $perdir_details = [
        [
          'perihal' => 'Mengubah struktur organisasi bagian Jalan Rel dan Jembatan, bagian Sinyal, Telekomunikasi dan Listrik serta bagian Listrik Aliran Atas Daerah Operasi 1 Jakarta.',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
      ];

      DB::table('perdir_details')->insert($perdir_details);
    }
}
