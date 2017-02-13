@php $customization = Laralum\Customization\Models\Customization::first(); @endphp
<style>
    body {
        {{ $customization->color ? 'color: ' . $customization->color . ';' : '' }}
        {{ $customization->background_color ? 'background-color: ' . $customization->background_color . ';' : '' }}
    }
    @if($customization->header_color)
        #header, #navbar {
            color: #ffffff;
            background-color: {{ $customization->header_color }};
        }
    @endif
</style>
