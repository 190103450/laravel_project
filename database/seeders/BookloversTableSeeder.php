<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookloversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          \App\Models\Booklover::factory()->count(30)->create();
    }
}
