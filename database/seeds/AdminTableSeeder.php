<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'is_admin' => '1',
            'status' => '0',
            'avatar' => 'user2-128x128.jpg',
            'info' => 'Admin'
        ]);
    }
}
