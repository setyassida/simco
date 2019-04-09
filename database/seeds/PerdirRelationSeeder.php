<?php

use Illuminate\Database\Seeder;

class PerdirRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $perdir_relations = [
        [
          'id_perdir_1' => 1,
          'id_perdir_2' => 1,
          'id_relation' => 1,
          'comment' => 'Mencabut semua',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ],
      ];

      DB::table('perdir_relations')->insert($perdir_relations);
    }
}
