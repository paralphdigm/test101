<?php

use Illuminate\Database\Seeder;
use App\Permission;
class ProductCategoriesPermissionTableSeeder extends Seeder
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
          'name' => 'productcategory-list',
          'display_name' => 'Display product category Listing',
          'description' => 'See only Listing Of product category'
        ],
        [
          'name' => 'productcategory-create',
          'display_name' => 'Create product category',
          'description' => 'Create New product category'
        ],
        [
          'name' => 'productcategory-edit',
          'display_name' => 'Edit product category',
          'description' => 'Edit product category'
        ],
        [
          'name' => 'productcategory-delete',
          'display_name' => 'Delete product category',
          'description' => 'Delete product category'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
  }
}
