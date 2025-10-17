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
        for ($i=0; $i<2; $i++){
            DB::table('posts')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        }
    }
}
