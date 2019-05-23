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
        factory(App\Reciever::class, 5)->create();
        factory(App\Mailing::class, 5)->create();

        App\User::create([
            'name' => 'Jasper Helmich',
            'email' => 'jasper.helmich@gmail.com',
            'password' => bcrypt('Test1234')
        ]);
    }
}
