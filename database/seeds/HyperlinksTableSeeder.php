<?php

use Illuminate\Database\Seeder;

class HyperlinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Hyperlink::class, 9)->create();
    }
}
