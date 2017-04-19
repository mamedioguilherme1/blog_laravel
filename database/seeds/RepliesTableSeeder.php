<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Reply::truncate();

        factory(\App\Reply::class, 90)
        	->create();			
    }
}
