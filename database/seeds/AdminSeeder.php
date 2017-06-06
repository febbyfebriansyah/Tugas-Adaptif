<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User();
        $admin->name = 'admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('asdf');
        $admin->privilege = 99;
        $admin->save();
    }
}
