<?php

namespace Laralum\Customization\Models;

use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    public $table = 'laralum_customization';
    public $fillable = [
        'css', 'js', 'color', 'background_color', 'header_color',
    ];
}
