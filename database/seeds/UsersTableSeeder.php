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
        App\User::updateOrCreate(
            ['email' => 'nicolas.vogelpoth@uniper.energy', 'name' => 'Nicolas'],
            ['password' => Hash::make('secret')]
        );

        App\User::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'name' => 'Jill Harvard'],
            ['password' => Hash::make('helloworld')]
        );

        App\User::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'name' => 'Jamal Harvard'],
            ['password' => Hash::make('helloworld')]
        );
    }
}
