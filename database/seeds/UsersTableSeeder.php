<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creamos 29 y 1 manual sin ser faker
        factory(App\User::class, 29)->create();

        App\User::create([
                'name'      => 'Juanma',
                'email'     => 'jm@laravel.com',
                'password'  => bcrypt('12345678')
            ]);
    }
}
