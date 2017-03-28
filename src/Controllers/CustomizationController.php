<?php

namespace Laralum\Customization\Controllers;

use Laralum\Customization\Models\Customization;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomizationController extends Controller
{
    /**
     * Display the customization settings.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'navbar_color' => 'max:255',
            'favicon' => 'url|max:2000',
        ]);
        Customization::first()->update([
            // 'color'             => $request->input('color'),
            // 'background_color'  => $request->input('background_color'),
            'navbar_color'      => $request->navbar_color,
            'favicon'           => $request->favicon,
        ]);

        return redirect()->route('laralum::settings.index', ['p' => 'Customization'])->with('success', __('laralum_customization::general.updated_settings'));
    }
}
