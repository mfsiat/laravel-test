<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Seeders\DB;
// use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => Str::random(10),
            'body' => Str::random(100),
        ]);
    }
}
