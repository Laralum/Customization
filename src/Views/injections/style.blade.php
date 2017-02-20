@php $customization = Laralum\Customization\Models\Customization::first(); @endphp
<style>
    @if($customization->navbar_color)
        .uk-navbar-container {
            background-color: {{ $customization->navbar_color }} !important;
        }
    @endif
</style>
