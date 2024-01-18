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
      $jsonFilePath = storage_path('app/public/template-1.json');
      $jsonContent = file_get_contents($jsonFilePath);

        Page::create([
            'title' => 'Landing Page Berita',
            'short_description' => 'Menampilkan Halamam Utama Website Berita',
            'content' => $jsonContent,
        ]);
    }
}
