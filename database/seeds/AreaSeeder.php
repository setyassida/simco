<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $areas = [
        [
          'kode' => 'DO1',
          'nama' => 'Daop 1 Jakarta',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
          'kode' => 'DO2',
          'nama' => 'Daop 2 Bandung',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
      ];

      DB::table('areas')->insert($areas);
    }
}
