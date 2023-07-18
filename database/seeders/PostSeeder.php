<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'name' => 'Laborum labore animi',
            'slug' => 'laborum-labore-animi',
            'category_id' => 1,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_01.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'sit amet consectetur',
            'slug' => 'sit-amet-consectetur',
            'category_id' => 2,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_02.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'Laborum labore',
            'slug' => 'laborum-labore',
            'category_id' => 4,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_03.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectetur adipisicing',
            'slug' => 'consectetur-adipisicing',
            'category_id' => 1,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 1,
            'user_id' => 1,
            'image' => 'img_04.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'explicabo necessitatibus',
            'slug' => 'explicabo-necessitatibus',
            'category_id' => 3,
            'extract' => 'explicabo necessitatibus labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_05.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'deleniti corrupti nisi',
            'slug' => 'deleniti-corrupti-nisi',
            'category_id' => 3,
            'extract' => 'autem facilis eveniet tempora consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 1,
            'user_id' => 1,
            'image' => 'img_06.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectetur adipisicing elit laborum',
            'slug' => 'consectetur-adipisicing-elit-laborum',
            'category_id' => 2,
            'extract' => 'Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_07.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectetur adipisicings',
            'slug' => 'consectetur-adipisicings',
            'category_id' => 3,
            'extract' => 'molestias deleniti corrupti nisi autem adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amset consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_08.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'delenitif corrupti nisi',
            'slug' => 'delenitif-corrupti-nisi',
            'category_id' => 4,
            'extract' => 'autem facilis eveniet tempora consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 1,
            'user_id' => 1,
            'image' => 'img_09.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consedctetur adipisicing elit laborum',
            'slug' => 'consedctetur-adipisicing-elit-laborum',
            'category_id' => 2,
            'extract' => 'Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_10.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectgetur adipisicing',
            'slug' => 'consectgetur-adipisicing',
            'category_id' => 2,
            'extract' => 'molestias deleniti corrupti nisi autem adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_11.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'Laborumd labore animi',
            'slug' => 'laborumd-labore-animi',
            'category_id' => 1,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_12.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'sit afmet consectetur',
            'slug' => 'sit-afmet-consectetur',
            'category_id' => 3,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_13.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'Laborsum labore',
            'slug' => 'laborsum-labore',
            'category_id' => 1,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_14.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectetur adipigsicing',
            'slug' => 'consectetur-adipisgicing',
            'category_id' => 2,
            'extract' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_15.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'explicabo-necessitatibuds',
            'slug' => 'explicabo-necessitatibuds',
            'category_id' => 4,
            'extract' => 'explicabo necessitatibus labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_16.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectetur adipisiscing elit laborum',
            'slug' => 'consectetur-adipisiscing-elit-laborum',
            'category_id' => 2,
            'extract' => 'Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_17.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectetur adipisicging',
            'slug' => 'consectetur-adipisicging',
            'category_id' => 4,
            'extract' => 'molestias deleniti corrupti nisi autem adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_18.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'delenitdi corrhupti nisi',
            'slug' => 'delenitdi-corrhupti-nisi',
            'category_id' => 1,
            'extract' => 'autem facilis eveniet tempora consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_19.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consectehtur laborum',
            'slug' => 'consectehtur-laborum',
            'category_id' => 1,
            'extract' => 'Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_20.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'consecteturf adipisicing',
            'slug' => 'consecteturf-adipisicing',
            'category_id' => 3,
            'extract' => 'molestias deleniti corrupti nisi autem adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_21.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('posts')->insert([
            'name' => 'Laborum laborfe animi',
            'slug' => 'laborum-laborfe-animi',
            'category_id' => 3,
            'extract' => 'acilis eveniet tempora explicabo necessitatibus Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut .',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariaturLorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore animi molestias deleniti corrupti nisi autem facilis eveniet tempora explicabo necessitatibus ut voluptate, commodi neque eaque optio maxime, quam pariatur',
            'status' => 2,
            'user_id' => 1,
            'image' => 'img_22.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $posts = Post::all();

        foreach($posts as $post) {

            $post->tags()->attach([
                rand(1, 3),
            ]);
        }
    }
}
