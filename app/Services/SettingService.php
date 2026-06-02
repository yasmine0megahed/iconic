<?php

namespace App\Services;

use App\Models\dashboard\Setting;
use Illuminate\Support\Facades\DB;


class SettingService
{
    // **change color or theme**
    public function update(Setting $setting, array $data)
    {

        return DB::transaction(function () use ($setting, $data) {

            if (! $setting) {
                throw new \Exception('Settings not found');
            }

            $setting->update([
                'theme' => strtolower($data['theme']),
                'font' => $data['font'],
                'mode_type' => isset($data['mode_type']) && $data['mode_type'] == 'Y' ? 'Y' : 'N',
                'data_theme' => $data['data_theme'],
            ]);

            return $setting;
        });
    }
}
