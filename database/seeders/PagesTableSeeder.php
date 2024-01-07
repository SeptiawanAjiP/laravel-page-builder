<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh seed data
        Page::create([
            'title' => 'Page 1',
            'short_description' => 'Short description for Page 1',
            'content' => 'Content for Page 1',
        ]);

        Page::create([
            'title' => 'Page 2',
            'short_description' => 'Short description for Page 2',
            'content' => 'Content for Page 2',
        ]);

        // Tambahkan data lain sesuai kebutuhan
    }
}
