<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    for ($i = 1; $i < 11; $i++) {
      DB::table('tasks')->insert([
        'name' => 'Task ' . $i,
        'card_id' => $i,
      ]);
    }
  }
}
