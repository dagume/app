<?php

namespace App\Http\Controllers;
use App\User;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use DB;

use Illuminate\Http\Request;


class RolesController extends Controller
{
    public function __construct()
    {}
    public function index()
    {
        //dd(Role::findOrfail(1));
        //$role1 = Role::findOrfail(1);
        //$role2 = Role::findOrfail(2);
        //$role3 = Role::findOrfail(3);
        //$role4 = Role::findOrfail(4);
        //$role5 = Role::findOrfail(5);
        //$role2 = Role::create(['name' => 'Prestamista']);
        //$role3 = Role::create(['name' => 'Proveedor']);
        //$role1 = Role::create(['name' => 'Super Admin']);
        //$role2 = Role::create(['name' => 'Ingeniero residente']);
        //$role3 = Role::create(['name' => 'Contador']);
        //$role4 = Role::create(['name' => 'Cliente']);
        //$role5 = Role::create(['name' => 'Socio']);
        //$role6 = Role::create(['name' => 'Banco']);
        //$role7 = Role::create(['name' => 'Prestamista']);
        //$role8 = Role::create(['name' => 'Proveedor']);
//
<<<<<<< HEAD
        //$permission1 = Permission::findOrfail(1);
        //$permission2 = Permission::findOrfail(2);
        //$permission3 = Permission::findOrfail(3);
        //$permission4 = Permission::findOrfail(4);
        //$permission5 = Permission::findOrfail(5);
        //$permission6 = Permission::findOrfail(6);
        //$permission7 = Permission::findOrfail(7);
        //$permission8 = Permission::findOrfail(8);
        //$permission9 = Permission::findOrfail(9);
        //$permission10= Permission::findOrfail(10);
        //$permission11= Permission::findOrfail(11);
        //$permission12= Permission::findOrfail(12);
        //$permission13= Permission::findOrfail(13);
        //$permission14= Permission::findOrfail(14);
        ////$permission15= Permission::findOrfail(15);
        //$permission16= Permission::findOrfail(16);
        //$permission17= Permission::findOrfail(17);
        //$permission18= Permission::findOrfail(18);
        //$permission19= Permission::findOrfail(19);
        //$permission20= Permission::findOrfail(20);
        //$permission21= Permission::findOrfail(21);
        //$permission22= Permission::findOrfail(22);
        //$permission23= Permission::findOrfail(23);
        //$permission24= Permission::findOrfail(24);
        //$permission25= Permission::findOrfail(25);
        //$permission26= Permission::findOrfail(26);
        //$permission27= Permission::findOrfail(27);
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
        //$role2->givePermissionTo($permission1);
        //$role3->givePermissionTo($permission1);
        //$role5->givePermissionTo($permission1);
//
        //$role2->givePermissionTo($permission2);
        //$role3->givePermissionTo($permission2);
        //$role5->givePermissionTo($permission2);
//
        //$role3->givePermissionTo($permission3);
        //$role3->givePermissionTo($permission4);
        //$role3->givePermissionTo($permission5);
//
        //$role2->givePermissionTo($permission6);
        //$role3->givePermissionTo($permission6);
        //$role4->givePermissionTo($permission6);
        //$role5->givePermissionTo($permission6);
//
        //$role2->givePermissionTo($permission7);
        //$role3->givePermissionTo($permission7);
        //$role4->givePermissionTo($permission7);
        //$role5->givePermissionTo($permission7);
//
        //$role3->givePermissionTo($permission8);
        //$role3->givePermissionTo($permission9);
        //$role3->givePermissionTo($permission10);
        //$role3->givePermissionTo($permission11);
        //$role3->givePermissionTo($permission12);
        //$role3->givePermissionTo($permission13);
        //$role3->givePermissionTo($permission14);
//
        //$role2->givePermissionTo($permission16);
        //$role3->givePermissionTo($permission16);
        //$role5->givePermissionTo($permission16);
//
        //$role2->givePermissionTo($permission17);
        //$role3->givePermissionTo($permission17);
        //$role5->givePermissionTo($permission17);
//
        //$role2->givePermissionTo($permission18);
        //$role3->givePermissionTo($permission18);
        //$role5->givePermissionTo($permission18);
//
        //$role2->givePermissionTo($permission19);
        //$role3->givePermissionTo($permission19);
        //$role5->givePermissionTo($permission19);

        //$role2->givePermissionTo($permission20);
        //$role3->givePermissionTo($permission20);
        //$role5->givePermissionTo($permission20);
//
        //$role2->givePermissionTo($permission21);
        //$role3->givePermissionTo($permission21);
        //$role5->givePermissionTo($permission21);
//
        //$role2->givePermissionTo($permission22);
        //$role3->givePermissionTo($permission22);
        //$role5->givePermissionTo($permission22);
//
        //$role2->givePermissionTo($permission23);
        //$role3->givePermissionTo($permission23);
        //$role5->givePermissionTo($permission23);
<<<<<<< HEAD
=======
=======
        //$permission1 = Permission::findOrFail(1);
        //$permission2 = Permission::findOrFail(2);
        //$permission3 = Permission::findOrFail(3);
        //$permission4 = Permission::findOrFail(4);
        //$permission5 = Permission::findOrFail(5);
        //$permission6 = Permission::findOrFail(6);
        //$permission7 = Permission::findOrFail(7);
        //$permission8 = Permission::findOrFail(8);
        //$permission9 = Permission::findOrFail(9);
        //$permission10= Permission::findOrFail(10);
        //$permission11= Permission::findOrFail(11);
        //$permission12= Permission::findOrFail(12);
        //$permission13= Permission::findOrFail(13);
        //$permission14= Permission::findOrFail(14);
        //$permission15= Permission::findOrFail(15);
        //$permission16= Permission::findOrFail(16);
        //$permission17= Permission::findOrFail(17);
        //$permission18= Permission::findOrFail(18);
        //$permission19= Permission::findOrFail(19);
        //$permission20= Permission::findOrFail(20);
        //$permission21= Permission::findOrFail(21);
        //$permission22= Permission::findOrFail(22);
        //$permission23= Permission::findOrFail(23);
        //$permission24= Permission::findOrFail(24);
        //$permission25= Permission::findOrFail(25);
        //$permission26= Permission::findOrFail(26);
        //$permission27= Permission::findOrFail(27);

        //$permission1 = Permission::create(['name' => 'Listar contacts']);
        //$permission2 = Permission::create(['name' => 'Ver detalle de contact']);
        //$permission3 = Permission::create(['name' => 'Creacion de contact']);
        //$permission4 = Permission::create(['name' => 'Edicion de contact']);
        //$permission5 = Permission::create(['name' => 'Eliminar contact']);
        //$permission6 = Permission::create(['name' => 'Listar projects']);
        //$permission7 = Permission::create(['name' => 'Ver detalle de project']);
        //$permission8 = Permission::create(['name' => 'Creacion de project']);
        //$permission9 = Permission::create(['name' => 'Edicion de project']);
        //$permission10= Permission::create(['name' => 'Eliminar project']);
        //$permission11= Permission::create(['name' => 'Listar roles']);
        //$permission12= Permission::create(['name' => 'Ver detalle del role']);
        //$permission13= Permission::create(['name' => 'Creacion de role']);
        //$permission14= Permission::create(['name' => 'Edicion de role']);
        //$permission15= Permission::create(['name' => 'Eliminar role']);
        //$permission16= Permission::create(['name' => 'Listar products']);
        //$permission17= Permission::create(['name' => 'Ver detalle del product']);
        //$permission18= Permission::create(['name' => 'Creacion de product']);
        //$permission19= Permission::create(['name' => 'Edicion de product']);
        //$permission20= Permission::create(['name' => 'Eliminar product']);
        //$permission21= Permission::create(['name' => 'Listar categories']);
        //$permission22= Permission::create(['name' => 'Ver detalle de category']);
        //$permission23= Permission::create(['name' => 'Creacion de category']);
        //$permission24= Permission::create(['name' => 'Edicion de category']);
        //$permission25= Permission::create(['name' => 'Eliminar category']);
        //$permission26= Permission::create(['name' => 'Listar permissions']);
        //$permission27= Permission::create(['name' => 'Ver detalle del permission']);
//
        //$permission1->assignRole($role2);
        //$permission1->assignRole($role3);
        //$permission1->assignRole($role5);
        //$permission2->assignRole($role2);
        //$permission2->assignRole($role3);
        //$permission2->assignRole($role5);
        //$permission3->assignRole($role3);
        //$permission4->assignRole($role3);
        //$permission5->assignRole($role3);
        //$permission6->assignRole($role2);
        //$permission6->assignRole($role3);
        //$permission6->assignRole($role4);
        //$permission6->assignRole($role5);
        //$permission7->assignRole($role2);
        //$permission7->assignRole($role3);
        //$permission7->assignRole($role4);
        //$permission7->assignRole($role5);
        //$permission8->assignRole($role3);
        //$permission9->assignRole($role3);
        //$permission10->assignRole($role3);
        //$permission11->assignRole($role3);
        //$permission12->assignRole($role3);
        //$permission13->assignRole($role3);
        //$permission14->assignRole($role3);
        //$permission16->assignRole($role2);
        //$permission16->assignRole($role3);
        //$permission16->assignRole($role5);
        //$permission17->assignRole($role2);
        //$permission17->assignRole($role3);
        //$permission17->assignRole($role5);
        //$permission18->assignRole($role2);
        //$permission18->assignRole($role3);
        //$permission18->assignRole($role5);
        //$permission19->assignRole($role2);
        //$permission19->assignRole($role3);
        //$permission19->assignRole($role5);
        //$permission20->assignRole($role2);
        //$permission20->assignRole($role3);
        //$permission20->assignRole($role5);
        //$permission21->assignRole($role2);
        //$permission21->assignRole($role3);
        //$permission21->assignRole($role5);
        //$permission22->assignRole($role2);
        //$permission22->assignRole($role3);
        //$permission22->assignRole($role5);
        //$permission23->assignRole($role2);
        //$permission23->assignRole($role3);
        //$permission23->assignRole($role5);
        //$permission24->assignRole($role2);
        //$permission24->assignRole($role3);
        //$permission24->assignRole($role5);
        //$permission25->assignRole($role2);
        //$permission25->assignRole($role3);
        //$permission25->assignRole($role5);
        //$permission26->assignRole($role3);
        //$permission27->assignRole($role3);

        $role1 = Role::create(['guard_name' => 'api', 'name' => 'clienteApi']);
        $permission1 = Permission::create(['guard_name' => 'api', 'name' => 'Listar projectsApi']);
        $permission1->assignRole($role1);
        //$user1 = User::findOrFail(6);
        //$user1->assignRole($role1);

        //$role2 = Role::create(['guard_name' => 'api', 'name' => 'clienteApi']);
        //$permission2 = Permission::create(['guard_name' => 'api', 'name' => 'projectsApi']);
        //$permission2->assignRole($role2);
        //$user2 = User::findOrFail(6);
        //$user2->assignRole($role2);
        echo("Listo");
>>>>>>> cd7a14be8491642339342c1152fbb3182342544c

>>>>>>> d0a96b66ec8b0bb52ab3a83ef633170bbe9b41a3
        //$role2->givePermissionTo($permission24);
        //$role3->givePermissionTo($permission24);
        //$role5->givePermissionTo($permission24);
//
        //$role2->givePermissionTo($permission25);
        //$role3->givePermissionTo($permission25);
        //$role5->givePermissionTo($permission25);
//
        //$role3->givePermissionTo($permission26);
        //$role3->givePermissionTo($permission27);
        echo('listo');
    }
}
