<?php

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
        // $this->call(UserSeeder::class);

        // A continuacion crearemos un usuario de prueba mediante el seeder
        App\User::create([
            'name' => 'Jesus Fernandez H',
            'email' => 'jesus@admin.com',
            'password' => bcrypt('Jesus 123 @')
        ]);
    }
}
