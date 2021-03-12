<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hagaque',
            'telephone' => '69992685713',
            'email' => 'hagaque@gmail.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Sestito',
            'telephone' => '69992233212',
            'email' => 'sestito@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
