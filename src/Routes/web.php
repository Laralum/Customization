<?php

Route::group([
        'middleware' => ['web', 'laralum.base', 'laralum.auth'],
        'prefix' => config('laralum.settings.base_url'),
        'namespace' => 'Laralum\Customization\Controllers',
        'as' => 'laralum::'
    ], function () {
        Route::post('customization', 'CustomizationController@update')->name('customization.index.update');
});
