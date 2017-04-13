<?php

Route::group([
        'middleware' => [
            'web', 'laralum.base', 'laralum.auth',
            'can:access,Laralum\Customization\Models\Customization',
        ],
        'prefix'    => config('laralum.settings.base_url'),
        'namespace' => 'Laralum\Customization\Controllers',
        'as'        => 'laralum::',
    ], function () {
        Route::post('customization', 'CustomizationController@update')->name('customization.index.update');
    });
