<?php

use Illuminate\Database\Seeder;

class PerdirRelationMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $perdir_relation_masters = [
        [
          'nama' => 'Mencabut',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
          'nama' => 'Merubah',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
      ];

      DB::table('perdir_relation_masters')->insert($perdir_relation_masters);
    }
}
