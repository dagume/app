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
    {}
    public function index()
    {
        $role1 = Role::create(['name' => 'Banco']);
        $role2 = Role::create(['name' => 'Prestamista']);
        $role3 = Role::create(['name' => 'Proveedor']);
        //$role1 = Role::create(['name' => 'Super Admin']);
        //$role2 = Role::create(['name' => 'Equipo de trabajo']);
        //$role3 = Role::create(['name' => 'Cliente']);
        //$role4 = Role::create(['name' => 'Socio']);
//
        //$permission1 = Permission::create(['name' => 'Listar proyectos']);
        //$permission2 = Permission::create(['name' => 'Buscar proyecto']);
        //$permission3 = Permission::create(['name' => 'Crear proyectos']);
        //$permission4 = Permission::create(['name' => 'Editar proyectos']);
        //$permission5 = Permission::create(['name' => 'Cambiar estado Proyecto']);
        //$permission6 = Permission::create(['name' => 'Listar contactos']);
        //$permission7 = Permission::create(['name' => 'Buscar contacto']);
        //$permission8 = Permission::create(['name' => 'Crear contacto']);
        //$permission9 = Permission::create(['name' => 'Editar contacto']);
        //$permission10 = Permission::create(['name' => 'Listar miembros']);
        //$permission11= Permission::create(['name' => 'Vincular miembro']);
        //$permission12= Permission::create(['name' => 'Listar categoria']);
        //$permission13= Permission::create(['name' => 'Buscar categoria']);
        //$permission14= Permission::create(['name' => 'Crear categoria']);
        //$permission15= Permission::create(['name' => 'Editar categoria']);
        //$permission16= Permission::create(['name' => 'Listar productos']);
        //$permission17= Permission::create(['name' => 'Buscar Producto']);
        //$permission18= Permission::create(['name' => 'Crear producto']);
        //$permission19= Permission::create(['name' => 'Editar producto']);
        //$permission20= Permission::create(['name' => 'Listar roles']);
        //$permission21= Permission::create(['name' => 'Buscar rol']);
        //$permission22= Permission::create(['name' => 'Listar permisos']);
        //$permission23= Permission::create(['name' => 'Buscar permiso']);
        //$permission24= Permission::create(['name' => 'Listar ordenes']);
        //$permission25= Permission::create(['name' => 'Buscar orden']);
        //$permission26= Permission::create(['name' => 'Crear orden']);
        //$permission27= Permission::create(['name' => 'Editar orden']);
        //$permission28= Permission::create(['name' => 'Crear detalle']);
//
        //$permission1->assignRole($role2);
        //$permission1->assignRole($role3);
        //$permission1->assignRole($role4);
//
        //$permission2->assignRole($role2);
        //$permission2->assignRole($role3);
        //$permission2->assignRole($role4);
        //$permission6->assignRole($role2);
        //$permission7->assignRole($role2);
//
        //$permission12->assignRole($role2);
        //$permission13->assignRole($role2);
        //$permission14->assignRole($role2);
        //$permission15->assignRole($role2);
        //$permission16->assignRole($role2);
        //$permission17->assignRole($role2);
        //$permission18->assignRole($role2);
        //$permission19->assignRole($role2);

    }
}
