<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
        protected $fillable = [
        'theme',
        'font',
        'mode_type',
        'data_theme',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
