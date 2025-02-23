<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Smartphone', 'category_id' => 1],
            ['name' => 'T-shirt', 'category_id' => 2],
            ['name' => 'Programming Book', 'category_id' => 3],
            ['name' => 'Office Chair', 'category_id' => 4],
            ['name' => 'Rice', 'category_id' => 5],
        ]);
    }
}
