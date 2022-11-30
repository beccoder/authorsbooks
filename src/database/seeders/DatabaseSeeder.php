<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'author' => 'Robert Kiosaki',
                'book' => 'Rich Dad',
            ], 
            [
                'id' => 2,
                'author' => 'Robert Kiosaki',
                'book' => 'How to become rich',
            ]
        ]);
    }
}
