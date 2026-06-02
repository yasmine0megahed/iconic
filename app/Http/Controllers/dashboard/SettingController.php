<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Setting;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    public function update(Request $request, SettingService $service, Setting $setting)
    {
        Log::info($request->all());
        $data = $request->only('theme', 'font', 'mode_type', 'data_theme');

        $new_setting = $service->update($setting, $data);

        return response()->json([
            'success' => true,
            'message' => __('Settings Applied Successfully'),
            'data' => $new_setting,
        ]);
    }
}
