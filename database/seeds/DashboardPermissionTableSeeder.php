<?php

use Illuminate\Database\Seeder;
use App\Permission;
class DashboardPermissionTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      $permission = [
        [
          'name' => 'dashboard-list',
          'display_name' => 'Display dasboard Listing',
          'description' => 'See only Listing Of dasboard'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
  }
}
