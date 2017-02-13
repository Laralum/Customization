@php $customization = Laralum\Customization\Models\Customization::first(); @endphp
<style>
    body {
        {{ $customization->color ? 'color: ' . $customization->color . ';' : '' }}
        {{ $customization->background_color ? 'background-color: ' . $customization->background_color . ';' : '' }}
    }
    @if($customization->navbar_color)
        .navbar {
            background-color: {{ $customization->navbar_color }} !important;
        }
    @endif
</style>
