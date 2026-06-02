<?php

namespace Database\Seeders;

use App\Models\dashboard\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::truncate();
        Setting::create([
            'theme' => 'c',
            'font' => 'n',
            'data_theme' => 'l',
            'mode_type' => 'N',
        ]);
    }
}
