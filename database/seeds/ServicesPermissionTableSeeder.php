<?php

use Illuminate\Database\Seeder;
use App\Permission;
class ServicesPermissionTableSeeder extends Seeder
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
          'name' => 'service-list',
          'display_name' => 'Display service Listing',
          'description' => 'See only Listing Of service'
        ],
        [
          'name' => 'service-create',
          'display_name' => 'Create service',
          'description' => 'Create New service'
        ],
        [
          'name' => 'service-edit',
          'display_name' => 'Edit service',
          'description' => 'Edit service'
        ],
        [
          'name' => 'service-delete',
          'display_name' => 'Delete service',
          'description' => 'Delete service'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
  }
}
