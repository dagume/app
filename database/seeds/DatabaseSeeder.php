<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,500) as $index) {
            DB::table('project')->insert([
        'name' => $faker->unique()->name,
        'start_date' => $faker->dateTimeBetween('-3 years', '-6 months'),
        'closing_date' => $faker->dateTimeBetween('-6 months', '+2 years'),
        'description' => $faker->text,
        'budget' => $faker->numberBetween(1000000,100000000),
        'execution' => 0,
        'advance' => 0,
        'category' => $faker->numberBetween(1,3),
        'state' => $faker->randomElement(['proceso', 'finalizado', 'archivado']),
        ]);
        }
/*
        $faker = Faker::create();
        foreach (range(1,500) as $index) {
            DB::table('contactos')->insert([
        'id_padre' => $faker->numberBetween(1,12),
        'tipo' => $faker->randomElement(['juridica', 'natural']),
        'nombre' => $faker->unique()->name,
        'apellido' => $faker->unique()->name,
        'tipo_documento' => $faker->randomElement(['Nit', 'Cedula', 'Pasaporte', 'Cedula de extranjería']),
        'numero_documento' => $faker->randomNumber(),
        'correo' => $faker->email,
        'telefonos' => $faker->randomNumber(),
        'estado' => $faker->randomElement(['1', '0']),
        'lugar' => $faker->text(),
        'direccion' => $faker->text(),
        'sitio_web' => $faker->text(),
        'puesto' => $faker->randomElement(['diseñador', 'ingeniero civil', 'contador', 'jefe']),
        ]);
        }

        $faker = Faker::create();
        foreach (range(1,500) as $index) {
            DB::table('integrantes')->insert([
        'id_proyecto' => $faker->numberBetween(1,500),
        'id_contacto' => $faker->numberBetween(1,500),
        ]);
        }
*/
        // $this->call(UsersTableSeeder::class);
    }
}
