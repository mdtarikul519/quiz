<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    UserRole::truncate();

    UserRole::create([
      'title' => 'teacher',
      'serial' => '1'
    ]);

    UserRole::create([
      'title' => 'student',
      'serial' => '2'
    ]);
  }
}
