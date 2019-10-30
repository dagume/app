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

        //$role1 = Role::findOrFail(1);
        //$role2 = Role::findOrFail(2);
        //$role3 = Role::findOrFail(3);
        //$role4 = Role::findOrFail(4);
        //$role5 = Role::findOrFail(5);
        //$role6 = Role::findOrFail(6);
        //$role7 = Role::findOrFail(7);
        //$role8 = Role::findOrFail(8);

        //$role1 = Role::create(['name' => 'Super Admin']);
        //$role2 = Role::create(['name' => 'Ingeniero residente']);
        //$role3 = Role::create(['name' => 'Contador']);
        //$role4 = Role::create(['name' => 'Cliente']);
        //$role5 = Role::create(['name' => 'Socio']);
        //$role6 = Role::create(['name' => 'Banco']);
        //$role7 = Role::create(['name' => 'Prestamista']);
        //$role8 = Role::create(['name' => 'Proveedor']);
//
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
        $user = User::findOrFail(6);
        $user->assignRole(1);
        echo("Listo");

    }
}
