<?php

namespace Database\Seeders;

use App\Models\ProductosPost;
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

    }

    private function seedProductosPosts(){
        ProductosPost::truncate();

    }

}
