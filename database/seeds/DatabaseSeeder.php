<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(RolesTableSeeder::class);

        DB::table('roles')->insert([
            'name' => 'root',
            'guard_name' => 'web'
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        DB::table('roles')->insert([
            'name' => 'taller',
            'guard_name' => 'web'
        ]);

      DB::table('users')->insert([
            'name' => "Root",
            'email' => "root@root.com",
            'password' => bcrypt('password'),
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => "App\User",
            'model_id' =>  1,
        ]);


        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@admin.com",
            'password' => bcrypt('password'),
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 2,
            'model_type' => "App\User",
            'model_id' => 2,
        ]);



        DB::table('estados')->insert([
            'estado' => 'Pendiente',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Proceso de Confeccion',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Incidencia',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Confeccion Express',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Enviado',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Terminado',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Cortado',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Rectificado',
            'color' => "#000000"
        ]);

        DB::table('estados')->insert([
            'estado' => 'Cancelado',
            'color' => "#000000"
        ]);



    }
}
