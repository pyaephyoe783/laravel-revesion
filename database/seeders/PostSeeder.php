<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            DB::table('posts')->insert([
            [
                'name' => 'First Post',
                'description' => 'This is the body of the first post.',
                'category_id' => 1

            ],
            [
                'name' => 'Second Post',
                'description' => 'This is the second post content.',
                'category_id' => 2

            ],
        ]);

    }
}
