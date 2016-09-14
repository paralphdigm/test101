<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
    Route::get('/', function () {

      $usercount = User::all()->first();
        if($usercount == null){
          return redirect('security/create');
        }
        else{
          return view('/home');
        }

    });

Route::auth();
Route::get('/home', 'HomeController@index');
Route::resource('/home', 'HomeController');


Route::get('/onlineshop', 'OnlineshopController@index');
Route::resource('/onlineshop', 'OnlineshopController');

Route::get('/', 'HomeController@index2');
Route::resource('/', 'HomeController');

Route::get('inquiries', 'InquiriesController@index');
Route::resource('inquiries', 'InquiriesController');

Route::get('productcategories', 'ProductCategoriesController@index');
Route::resource('productcategories', 'ProductCategoriesController');

Route::get('servicecategories', 'ServiceCategoryController@index');
Route::resource('servicecategories', 'ServiceCategoryController');


Route::get('products', 'ProductsController@index');
Route::resource('products', 'ProductsController');

Route::get('blogs', 'BlogController@index');
Route::resource('blogs', 'BlogController');


Route::get('services', 'ServicesController@index');
Route::resource('services', 'ServicesController');

// SECURITY
      Route::get('security/create', 'SecurityController@create');
      Route::resource('security/create', 'SecurityController');

      Route::post('/security/store',[
        'as' => 'security.store',
        'uses' => 'SecurityController@store'
      ]);

Route::auth();

Route::group(['middleware' => ['auth']], function() {

  Route::get('welcome',['as'=>'admin.welcome','uses'=>'homeController@index2','middleware' => ['permission:dashboard-list']]);

    // For User
    Route::get('users',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:user-list|user-create|user-edit|user-delete']]);
    Route::get('users/create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:user-create']]);
    Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:user-create']]);
    Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show']);
    Route::get('users/{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:user-edit']]);
    Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:user-edit']]);
    Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:user-delete']]);

    // For Role
    Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

    // For products
    Route::get('products',['as'=>'products.index','uses'=>'ProductsController@index','middleware' => ['permission:product-list|product-create|product-edit|product-delete']]);
    Route::get('products/create',['as'=>'products.create','uses'=>'ProductsController@create','middleware' => ['permission:product-create']]);
    Route::post('products/create',['as'=>'products.store','uses'=>'ProductsController@store','middleware' => ['permission:product-create']]);
    Route::get('products/{id}/edit',['as'=>'products.edit','uses'=>'ProductsController@edit','middleware' => ['permission:product-edit']]);
    Route::patch('products/{id}',['as'=>'products.update','uses'=>'ProductsController@update','middleware' => ['permission:product-edit']]);
    Route::delete('products/{id}',['as'=>'products.destroy','uses'=>'ProductsController@destroy','middleware' => ['permission:product-delete']]);

    // For inquiry
    Route::get('inquiries',['as'=>'inquiries.index','uses'=>'InquiriesController@index','middleware' => ['permission:inquiry-list|inquiry-create|inquiry-edit|inquiry-delete']]);
    Route::post('inquiries/create',['as'=>'inquiries.store','uses'=>'InquiriesController@store']);
    Route::get('inquiries/{id}/edit',['as'=>'inquiries.edit','uses'=>'InquiriesController@edit','middleware' => ['permission:inquiry-edit']]);
    Route::patch('inquiries/{id}',['as'=>'inquiries.update','uses'=>'InquiriesController@update','middleware' => ['permission:inquiry-edit']]);
    Route::delete('inquiries/{id}',['as'=>'inquiries.destroy','uses'=>'InquiriesController@destroy','middleware' => ['permission:inquiry-delete']]);

    // For services
    Route::get('services',['as'=>'services.index','uses'=>'ServicesController@index','middleware' => ['permission:service-list|service-create|service-edit|service-delete']]);
    Route::get('services/create',['as'=>'services.create','uses'=>'ServicesController@create','middleware' => ['permission:service-create']]);
    Route::post('services/create',['as'=>'services.store','uses'=>'ServicesController@store','middleware' => ['permission:service-create']]);
    Route::get('services/{id}/edit',['as'=>'services.edit','uses'=>'ServicesController@edit','middleware' => ['permission:service-edit']]);
    Route::patch('services/{id}',['as'=>'services.update','uses'=>'ServicesController@update','middleware' => ['permission:service-edit']]);
    Route::delete('services/{id}',['as'=>'services.destroy','uses'=>'ServicesController@destroy','middleware' => ['permission:service-delete']]);

    // For service categories
    Route::get('servicecategories',['as'=>'servicecategories.index','uses'=>'ServiceCategoryController@index','middleware' => ['permission:servicecategory-list|servicecategory-create|servicecategory-edit|servicecategory-delete']]);
    Route::get('servicecategories/create',['as'=>'servicecategories.create','uses'=>'ServiceCategoryController@create','middleware' => ['permission:servicecategory-create']]);
    Route::post('servicecategories/create',['as'=>'servicecategories.store','uses'=>'ServiceCategoryController@store','middleware' => ['permission:servicecategory-create']]);
    Route::get('servicecategories/{id}/edit',['as'=>'servicecategories.edit','uses'=>'ServiceCategoryController@edit','middleware' => ['permission:servicecategory-edit']]);
    Route::patch('servicecategories/{id}',['as'=>'servicecategories.update','uses'=>'ServiceCategoryController@update','middleware' => ['permission:servicecategory-edit']]);
    Route::delete('servicecategories/{id}',['as'=>'servicecategories.destroy','uses'=>'ServiceCategoryController@destroy','middleware' => ['permission:servicecategory-delete']]);

    // For product categories
    Route::get('productcategories',['as'=>'productcategories.index','uses'=>'ProductCategoriesController@index','middleware' => ['permission:productcategory-list|productcategory-create|productcategory-edit|productcategory-delete']]);
    Route::get('productcategories/create',['as'=>'productcategories.create','uses'=>'ProductCategoriesController@create','middleware' => ['permission:productcategory-create']]);
    Route::post('productcategories/create',['as'=>'productcategories.store','uses'=>'ProductCategoriesController@store','middleware' => ['permission:productcategory-create']]);
    Route::get('productcategories/{id}/edit',['as'=>'productcategories.edit','uses'=>'ProductCategoriesController@edit','middleware' => ['permission:productcategory-edit']]);
    Route::patch('productcategories/{id}',['as'=>'productcategories.update','uses'=>'ProductCategoriesController@update','middleware' => ['permission:productcategory-edit']]);
    Route::delete('productcategories/{id}',['as'=>'productcategories.destroy','uses'=>'ProductCategoriesController@destroy','middleware' => ['permission:productcategory-delete']]);

});
