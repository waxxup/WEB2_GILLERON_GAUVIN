<?php

use Illuminate\Database\Seeder;

class BapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Bap::class, 30)->create();

    }
}
