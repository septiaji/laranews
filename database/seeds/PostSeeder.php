<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'title'         => 'Lorem ipsum',
                'content'       => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique debitis nihil laborum dolores ullam sunt voluptas non quod vel ab earum, dolore ad consectetur molestias minus necessitatibus quos omnis inventore?',
                'thumbnail'     => 'default-image.png',
                'user_id'       => 1,
                'created_at'    => Carbon::now()
            ]);
        }
    }
}
