<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    // $this->call(UsersTableSeeder::class);
    $this->call(UsersSeeder::class);
    $this->call(PerdirJenisSeeder::class);
    $this->call(PerdirRelationMasterSeeder::class);
    $this->call(AreaSeeder::class);
    $this->call(PerdirDetailSeeder::class);
    $this->call(PerdirSeeder::class);
    $this->call(PerdirRelationSeeder::class);
  }
}
