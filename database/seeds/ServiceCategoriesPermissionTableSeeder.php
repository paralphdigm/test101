<?php

use Illuminate\Database\Seeder;
use App\Permission;
class ServiceCategoriesPermissionTableSeeder extends Seeder
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
          'name' => 'servicecategory-list',
          'display_name' => 'Display service category Listing',
          'description' => 'See only Listing Of service category'
        ],
        [
          'name' => 'servicecategory-create',
          'display_name' => 'Create service category',
          'description' => 'Create New service category'
        ],
        [
          'name' => 'servicecategory-edit',
          'display_name' => 'Edit service category',
          'description' => 'Edit service category'
        ],
        [
          'name' => 'servicecategory-delete',
          'display_name' => 'Delete service category',
          'description' => 'Delete service category'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
  }
}
