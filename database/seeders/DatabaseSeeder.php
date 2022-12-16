<?php

namespace Database\Seeders;

use App\Models\Productospost;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        self::seedProductosPosts();
        self::seedVehiculos();
    }

    private function seedUsers(){
        User::truncate();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => env('ADMIN_EMAIL', 'admin@encuentro.test'),
            'password' => bcrypt(env('ADMIN_PASSWORD','password')),
            'apellidos' => 'admin',
            'fecha_nacimiento' => '1970-01-01',
            'telefono' => 000000000,
        ]);

        for ($i=0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'apellidos' => Str::random(10),
                'fecha_nacimiento' => '1970-01-01',
                'telefono' => '666555444',
            ]);
        }

    }

    private function seedVehiculos(){
        Vehiculo::truncate();

        DB::table('vehiculos')->insert([
            'matricula' => '1123 ELR',
            'modelo_vehiculo' => 'Toyota AE86',
            'anyo_matriculacion' => '1986',
            'combustible' => 'gasolina',
            'cv' => '140',
            'plazas' => '5',

        ]);
    }

    private function seedProductosPosts(){
        Productospost::truncate();

        DB::table('productosposts')->insert([
            'titulo' => 'Viaje a Madrid',
            'descripcion' => 'Ser Puntuales!',
            'fecha_viaje' => '2022-12-17',
            'hora_viaje' => '12:00',
            'inicio_ruta' => 'Carlos III, Cartagena',
            'destino_ruta' => 'Madrid, Warner Bross',
            'precio' => 'AUTOCALCULADO_funcion_plazas_vehiculo_distancia',
            'status_active' => true,
            'allow_desvios' => false,
            'estimacion_hora_llegada' => 'AUTOCALCULADO',
            'distancia' => 'AUTOCALCULADO',
            'plazas_disponibles' => '3',
            'precio_persona' => '50'
        ]);
    }

}
