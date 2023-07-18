<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'name' => 'Biologia',
            'slug' => 'biologia',
            'color' => 'green',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tags')->insert([
            'name' => 'Astronomia',
            'slug' => 'astronomia',
            'color' => 'blue',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tags')->insert([
            'name' => 'Fisica',
            'slug' => 'fisica',
            'color' => 'purple',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tags')->insert([
            'name' => 'Geologia',
            'slug' => 'geologia',
            'color' => 'amber',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('tags')->insert([
            'name' => 'Quimica',
            'slug' => 'quimica',
            'color' => 'red',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('tags')->insert([
            'name' => 'Computacion',
            'slug' => 'computacion',
            'color' => 'gray',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
