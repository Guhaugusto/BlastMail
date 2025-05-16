@props([
        'post' => null,

    ])

    @php
    $method = $post ? 'POST' : 'GET';
    @endphp

<form {{ $attributes }} method="{{ $method }}">
    @csrf

    {{ $slot}}
</form>