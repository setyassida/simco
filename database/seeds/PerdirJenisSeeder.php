<?php

use Illuminate\Database\Seeder;

class PerdirJenisSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $perdir_jenis = [
      [
        'nama' => 'Peraturan Induk',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ],
      [
        'nama' => 'Perubahan',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ],
    ];

    DB::table('perdir_jenis')->insert($perdir_jenis);
  }
}
