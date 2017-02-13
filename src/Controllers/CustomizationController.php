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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laralum_customization::index', ['customization' => Customization::first()]);
    }

    /**
     * Display the customization settings.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Customization::first()->update([
            'color'             => $request->input('color'),
            'background_color'  => $request->input('background_color'),
            'navbar_color'      => $request->input('navbar_color'),
        ]);

        return redirect()->route('laralum::customization.index')->with('success', __('laralum_customization::general.updated_settings'));
    }
}
