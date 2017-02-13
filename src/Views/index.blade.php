@extends('laralum::layouts.master')
@section('icon', 'mdi-format-paint')
@section('title', __('laralum_customization::general.title'))
@section('subtitle', __('laralum_customization::general.subtitle'))
@section('content')
    <div class="row">
        <div class="col col-md-12 col-lg-8 offset-lg-2">
            <div class="card shadow">
                <div class="card-header">
                    @lang('laralum_customization::general.edit_form')
                </div>
                <div class="card-block">
                    <form method="POST">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="color">@lang('laralum_customization::general.text_color')</label>
                            <input value="{{ old('color', $customization->color ? $customization->color : '') }}" type="text" class="form-control" name="color" id="color" aria-describedby="colorHelp" placeholder="@lang('laralum_customization::general.text_color_ph')">
                            <small id="colorHelp" class="form-text text-muted">@lang('laralum_customization::general.text_color_hp')</small>
                        </div>
                        <div class="form-group">
                            <label for="background_color">@lang('laralum_customization::general.back_color')</label>
                            <input value="{{ old('background_color', $customization->background_color ? $customization->background_color : '') }}" type="text" class="form-control" name="background_color" id="background_color" aria-describedby="back_colorHelp" placeholder="@lang('laralum_customization::general.back_color_ph')">
                            <small id="back_colorHelp" class="form-text text-muted">@lang('laralum_customization::general.back_color_hp')</small>
                        </div>
                        <div class="form-group">
                            <label for="navbar_color">@lang('laralum_customization::general.navbar_color')</label>
                            <input value="{{ old('navbar_color', $customization->navbar_color ? $customization->navbar_color : '') }}" type="text" class="form-control" name="navbar_color" id="navbar_color" aria-describedby="navbar_colorHelp" placeholder="@lang('laralum_customization::general.navbar_color_ph')">
                            <small id="navbar_colorHelp" class="form-text text-muted">@lang('laralum_customization::general.navbar_color_hp')</small>
                        </div>
                        <br />
                        <button type="submit" class="btn btn-success float-right clickable">Save Customization Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
