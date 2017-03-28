<?php

namespace Laralum\Customization\Models;

use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    public $table = 'laralum_customization';
    public $fillable = [
        'css', 'js', 'navbar_color', 'favicon', // 'color', 'background_color',
    ];
}
