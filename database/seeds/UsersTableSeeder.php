<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sejauh',
            'email' => 'admin@sejauh.id',
            'password' => bcrypt('secret'),
            'status' => true
        ]);
    }
}
