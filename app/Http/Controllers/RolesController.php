<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        $role = Role::destroy(['name' => 'ingeniero residente']);

        //$role = DB::table('roles')->where('id',"=","1")->get();
        //$permission = DB::table('permissions')->where('id',"=","1")->get();
        //$permission->assignRole($role);
        
    }
        
}
