<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //contacts
        Permission::create([
        'name'          => 'listar contacts',
        'slug'          => 'contact.list',
        'description'   => 'Lista y navega todos los contacts del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle de contact',
        'slug'          => 'contact.show',
        'description'   => 'ver en detalle cada contact del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de contact',
            'slug'          => 'contact.create',
            'description'   => 'crear un contact en el sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de contact',
        'slug'          => 'contact.edit',
        'description'   => 'editar cualquier dato de un contact del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar contact',
        'slug'          => 'contact.destroy',
        'description'   => 'eliminar cualquier contact del sistema',

        ]);

        //projects
        Permission::create([
            'name'          => 'Navegar projects',
            'slug'          => 'project.list',
            'description'   => 'Lista y navega tods los projects del sistema',
            ]);

            Permission::create([
            'name'          => 'ver detalle de project',
            'slug'          => 'project.show',
            'description'   => 'ver en detalle cada project del sistema',
            ]);

            Permission::create([
                'name'          => 'creacion de project',
                'slug'          => 'project.create',
                'description'   => 'crear un project en el sistema',
                ]);

            Permission::create([
            'name'          => 'edicion de project',
            'slug'          => 'project.edit',
            'description'   => 'editar cualquier dato de un project del sistema',

            ]);
            Permission::create([
            'name'          => 'eliminar project',
            'slug'          => 'project.destroy',
            'description'   => 'eliminar cualquier project del sistema',

            ]);

        //roles
        Permission::create([
        'name'          => 'Navegar roles',
        'slug'          => 'role.list',
        'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del role',
        'slug'          => 'role.show',
        'description'   => 'ver en detalle cada role del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de role',
            'slug'          => 'role.create',
            'description'   => 'crear un role en el sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de role',
        'slug'          => 'role.edit',
        'description'   => 'editar cualquier dato de un role del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar role',
        'slug'          => 'role.destroy',
        'description'   => 'eliminar cualquier role del sistema',

        ]);

        //products
        Permission::create([
        'name'          => 'Navegar products',
        'slug'          => 'product.list',
        'description'   => 'Lista y navega todos los products del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del product',
        'slug'          => 'product.show',
        'description'   => 'ver en detalle cada product del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de product',
            'slug'          => 'product.create',
            'description'   => 'crear un product en el sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de product',
        'slug'          => 'product.edit',
        'description'   => 'editar cualquier dato de un product del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar product',
        'slug'          => 'product.destroy',
        'description'   => 'eliminar cualquier product del sistema',

        ]);

        //categories
        Permission::create([
        'name'          => 'Navegar categories',
        'slug'          => 'category.list',
        'description'   => 'Lista y navega todos los categories del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del category',
        'slug'          => 'category.show',
        'description'   => 'ver en detalle cada category del sistema',
        ]);

        Permission::create([
            'name'          => 'creacion de category',
            'slug'          => 'category.create',
            'description'   => 'crear una category en el sistema',
            ]);

        Permission::create([
        'name'          => 'edicion de category',
        'slug'          => 'category.edit',
        'description'   => 'editar cualquier dato de un category del sistema',

        ]);
        Permission::create([
        'name'          => 'eliminar category',
        'slug'          => 'category.destroy',
        'description'   => 'eliminar cualquier category del sistema',

        ]);

        //permission
        Permission::create([
        'name'          => 'Navegar permissions',
        'slug'          => 'permission.list',
        'description'   => 'Lista y navega todos los permissions del sistema',
        ]);

        Permission::create([
        'name'          => 'ver detalle del permission',
        'slug'          => 'permission.show',
        'description'   => 'ver en detalle cada permission del sistema',
        ]);

    }
}

