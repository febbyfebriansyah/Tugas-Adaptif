<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new App\User();
        $admin->noKtp = '99';
        $admin->name = 'Admin Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = Hash::make('admin');
        $admin->privilege = 99;
        $admin->save();
    }
}
