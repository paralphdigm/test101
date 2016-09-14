<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Permission;
use App\PermissionRole;
use App\Role;
use App\RoleUser;
use App\Http\Requests;

class SecurityController extends Controller
{
          /**
          * Create a new controller instance.
          *
          *@return void
          */
         public function __construct()
         {

         }
         public function index(){




           $usercount = User::all()->first();
           if($usercount==null){

             return view('security.create');
           }
           else{
             return view('errors.404');
           }
         }
        public function create()
        {
          $usercount = User::all()->first();
          if($usercount==null){
            return view('security.create');
          }
          else{
            return view('errors.404');
          }
        }
        public function store(Request $request)
        {
        $usercount = User::lists('id')->count();

          $inputuser = $request->all();
          if($usercount == 0){

            \DB::transaction(function ($inputuser) use($inputuser){

              $permissiondata = [
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
                ],
                [
                  'name' => 'role-list',
                  'display_name' => 'Display Role Listing',
                  'description' => 'See only Listing Of Role'
                ],
                [
                  'name' => 'role-create',
                  'display_name' => 'Create Role',
                  'description' => 'Create New Role'
                ],
                [
                  'name' => 'role-edit',
                  'display_name' => 'Edit Role',
                  'description' => 'Edit Role'
                ],
                [
                  'name' => 'role-delete',
                  'display_name' => 'Delete Role',
                  'description' => 'Delete Role'
                ],
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
                ],
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
                ],
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
                ],
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
                ],
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
                ],
                [
                  'name' => 'dashboard-list',
                  'display_name' => 'Display dasboard Listing',
                  'description' => 'See only Listing Of dasboard'
                ],
              ];


              foreach ($permissiondata as $data) {
                \DB::table('permissions')
                        ->insert([
                             //'CornerName' => $input['CornerName'],
                             'name' => $data['name'],
                             'display_name' => $data['display_name'],
                             'description' => $data['description'],
                             'created_at' => \Carbon\Carbon::now(),
                             'updated_at' => \Carbon\Carbon::now(),
                ]);
              }


              \DB::table('users')
                      ->insert([
                           //'CornerName' => $input['CornerName'],
                           'name' => $inputuser['name'],
                           'email' => $inputuser['email'],
                           'password' => bcrypt($inputuser['password']),
                           'created_at' => \Carbon\Carbon::now(),
                           'updated_at' => \Carbon\Carbon::now(),
              ]);

                $role = Role::all()->first();
                if($role == null){
                $input['name'] = 'superadmin';
                $input['display_name'] = 'superadmin';
                $input['description'] = 'superadmin';
                Role::create($input)->save();

                $permissions = Permission::all();
                foreach ($permissions as $permission) {
                  $input['permission_id'] = $permission->id;
                  $input['role_id'] = 1;
                  PermissionRole::create($input)->save();
                }
                $input['user_id'] = 1;
                $input['role_id'] = 1;
                Roleuser::create($input)->save();
              }
           });
        }
           Session::flash('flash_message', 'User successfully added!');
           return redirect('/');
        }

}
