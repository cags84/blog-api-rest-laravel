<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla
        User::truncate();

        // Creamos el objeto faker
        $faker = Factory::create();

        // Creamos una password unico para registrar ese dato.
        $password = Hash::make('password');

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@prueba.com',
            'password' => $password
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }

    }
}
