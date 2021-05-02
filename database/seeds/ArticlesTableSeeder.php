<?php

use App\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar las tablas
        Article::truncate();

        // Creamos un objeto faker
        $faker = Factory::create();

        // Creamos una instancia de Article con los datos a ingresar
        for ($i = 0; $i < 150; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
