<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use DB;

use Illuminate\Http\Request;


class RolesController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {


        $role = Role::create(['name' => 'Super Admin']);
        $permission1 = Permission::create(['name' => 'agregar proyecto']);
        //$permission1->assignRole($role);
        $permission2 = Permission::create(['name' => 'editar proyecto']);
        $permission3 = Permission::create(['name' => 'buscar proyecto']);
        //$permission2->assignRole($role);
        //$role = DB::table('roles')->where('id',"=","1")->get();
        //$permission = DB::table('permissions')->where('id',"=","1")->get();
        //$permission->assignRole($role);

    }

}
