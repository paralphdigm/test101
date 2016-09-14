<?php

use Illuminate\Database\Seeder;
use App\Permission;
class UserPermissionTableSeeder extends Seeder
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
          'name' => 'user-list',
          'display_name' => 'Display user Listing',
          'description' => 'See only Listing Of Role'
        ],
        [
          'name' => 'user-create',
          'display_name' => 'Create user',
          'description' => 'Create New user'
        ],
        [
          'name' => 'user-edit',
          'display_name' => 'Edit user',
          'description' => 'Edit user'
        ],
        [
          'name' => 'user-delete',
          'display_name' => 'Delete user',
          'description' => 'Delete user'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
  }
}
