<?php

use Illuminate\Database\Seeder;

class PerdirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $perdirs = [
        [
          'nomor' => 'PER.U/KO.104/VII/5/KA-2018',
          'nama' => 'ORTALA DAOP 1 EXISTING',
          'tanggal_terbit' => date('2018-07-11'),
          'id_areas' => 1,
          'id_perdir_jenis' => 1,
          'is_active' => 1,
          'id_perdir_details' => 1,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
      ];

      DB::table('perdirs')->insert($perdirs);
    }
}
