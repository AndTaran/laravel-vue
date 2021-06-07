<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskListSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 1; $i < 11; $i++) {
      DB::table('desk_lists')->insert([
        'name' => 'Desk-list ' . $i,
        'desk_id' => $i,
      ]);
    }
  }
}
