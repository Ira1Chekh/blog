<?php

use Illuminate\Database\Seeder;
use App\PostTags;

class PostTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PostTags::class, 20)->create();
    }
}
