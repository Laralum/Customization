@php
    $customization = \Laralum\Customization\Models\Customization::first();
@endphp
<div uk-grid>
    @can('access', \Laralum\Customization\Models\Customization::class)
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

                <div class="uk-margin">
                    <label class="uk-form-label">@lang('laralum_customization::general.favicon')</label>
                    <div class="uk-form-controls">
                        <input value="{{ old('favicon', $customization->favicon ? $customization->favicon : '') }}" name="favicon" class="uk-input" type="text" placeholder="@lang('laralum_customization::general.favicon_ph')">
                        <small class="uk-text-meta">@lang('laralum_customization::general.favicon_hp')</small>
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
    @else
        <div class="uk-width-1-1@s">
        <div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h3><span class="ion-minus-circled"></span> @lang('laralum_customization::general.unauthorized_action')</h3>
                    <p>
                        @lang('laralum_customization::general.unauthorized_desc')
                    </p>
                    <p class="uk-text-meta">
                        @lang('laralum_customization::general.contact_webmaster')
                    </p>
                </div>
            </div>
        </div>
        </div>
    @endcan
</div>
