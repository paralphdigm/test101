<?php

use Illuminate\Database\Seeder;
use App\Permission;

class ProductsPermissionTableSeeder extends Seeder
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
          'name' => 'product-list',
          'display_name' => 'Display product Listing',
          'description' => 'See only Listing Of product'
        ],
        [
          'name' => 'product-create',
          'display_name' => 'Create product',
          'description' => 'Create New product'
        ],
        [
          'name' => 'product-edit',
          'display_name' => 'Edit product',
          'description' => 'Edit product'
        ],
        [
          'name' => 'product-delete',
          'display_name' => 'Delete product',
          'description' => 'Delete product'
        ]
      ];

      foreach ($permission as $key => $value) {
        Permission::create($value);
      }
  }
}
