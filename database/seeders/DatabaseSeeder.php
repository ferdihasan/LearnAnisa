<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Santri::factory(12)->create();

        User::create([
            'name' => 'Ferdi Hasan',
            'email' => 'ferdihasanpwd@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
