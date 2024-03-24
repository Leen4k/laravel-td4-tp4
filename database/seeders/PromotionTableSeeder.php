<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed three records into the promotions table
        Promotion::create([
            'title' => 'Promotion 1',
            'image' => 'https://us-tuna-sounds-images.voicemod.net/c2a634ba-0d27-479f-9955-b601ab995530-1702399212415.jpeg',
            'backgroundcolor' => 'bg-indigo-200', // Example background color
        ]);

        Promotion::create([
            'title' => 'Promotion 2',
            'image' => 'https://us-tuna-sounds-images.voicemod.net/c2a634ba-0d27-479f-9955-b601ab995530-1702399212415.jpeg',
            'backgroundcolor' => 'bg-pink-200', // Example background color
        ]);

        Promotion::create([
            'title' => 'Promotion 3',
            'image' => 'https://us-tuna-sounds-images.voicemod.net/c2a634ba-0d27-479f-9955-b601ab995530-1702399212415.jpeg',
            'backgroundcolor' => 'bg-yellow-200', // Example background color
        ]);
    }
}
