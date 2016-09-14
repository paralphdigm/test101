<?php

use Illuminate\Database\Seeder;
use App\Permission;
class InquiriesPermissionTableSeeder extends Seeder
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
          'name' => 'inquiry-list',
          'display_name' => 'Display inquiry Listing',
          'description' => 'See only Listing Of inquiry'
        ],
        [
          'name' => 'inquiry-create',
          'display_name' => 'Create inquiry',
          'description' => 'Create New inquiry'
        ],
        [
          'name' => 'inquiry-edit',
          'display_name' => 'Edit inquiry',
          'description' => 'Edit inquiry'
        ],
        [
          'name' => 'inquiry-delete',
          'display_name' => 'Delete inquiry',
          'description' => 'Delete inquiry'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
  }
}
