@php
    $customization = Laralum\Customization\Models\Customization::first();
@endphp
<div uk-grid>
    <div class="uk-width-1-1@s uk-width-1-5@l"></div>
    <div class="uk-width-1-1@s uk-width-3-5@l">
        <form class="uk-form-horizontal" method="POST" action="{{ route('laralum::customization.index.update') }}">
            {{ csrf_field() }}
            <fieldset class="uk-fieldset">

                <!--
                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_customization::general.text_color')</label>
                    <input value="{{ old('color', $customization->color ? $customization->color : '') }}" name="color" class="uk-input" type="text" placeholder="@lang('laralum_customization::general.text_color_ph')">
                    <small class="uk-text-meta">@lang('laralum_customization::general.text_color_hp')</small>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_customization::general.back_color')</label>
                    <input value="{{ old('background_color', $customization->background_color ? $customization->background_color : '') }}" name="background_color" class="uk-input" type="text" placeholder="@lang('laralum_customization::general.back_color_ph')">
                    <small class="uk-text-meta">@lang('laralum_customization::general.back_color_hp')</small>
                </div>
                -->

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_customization::general.navbar_color')</label>
                    <div class="uk-form-controls">
                        <input value="{{ old('navbar_color', $customization->navbar_color ? $customization->navbar_color : '') }}" name="navbar_color" class="uk-input" type="text" placeholder="@lang('laralum_customization::general.navbar_color_ph')">
                        <small class="uk-text-meta">@lang('laralum_customization::general.navbar_color_hp')</small>
                    </div>
                </div>

                <div class="uk-margin uk-align-right">
                    <button type="submit" class="uk-button uk-button-primary">
                        <span class="ion-forward"></span>&nbsp; @lang('laralum_customization::general.save')
                    </button>
                </div>

            </fieldset>
        </form>
    </div>
    <div class="uk-width-1-1@s uk-width-1-5@l"></div>
</div>
