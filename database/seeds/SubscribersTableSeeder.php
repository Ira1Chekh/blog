<?php

use Illuminate\Database\Seeder;
use App\Subscription;

class SubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subscription::class, 5)->create();
    }
}
