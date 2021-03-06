<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 1; $i < 11; $i++) {
      DB::table('cards')->insert([
        'name' => 'Card ' . $i,
        'desk_list_id' => $i,
      ]);
    }
  }
}
