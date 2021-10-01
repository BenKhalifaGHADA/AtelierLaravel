<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
         ProduitTableSeeder::class,
<<<<<<< HEAD
            CategoryTableSeeder::class
=======
>>>>>>> 38da87dde38898af28b61e328133658b9f59a6c9
        ]);
    }
}
