<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Settings::create([
                'sidebar' => 'info',
                'sidenav' => 'dark',
                'theme' => 'bg-gray-200'
            ]);
    }
}