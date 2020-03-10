@php($user = $user ?? Auth::user())
@php($size = $size ?? 50)

<img
    class="inline-block rounded-full"
    src="{{ $user->avatar }}"
    width="{{ $size }}"
    height="{{ $size }}"
/>
