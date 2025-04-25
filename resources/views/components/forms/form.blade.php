@props(['method' => 'POST', 'action' => null])

<form method="{{ $method }}" action="{{ $action }}" {{ $attributes }}>
    @csrf
    @if (!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif
    {{ $slot }}
</form>
