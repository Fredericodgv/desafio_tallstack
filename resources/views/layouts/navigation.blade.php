<div class="sm:flex">
    <x-nav-link :active="request()->routeIs('layouts.app')" href="{{ route('layouts.app') }}">
        {{ __('Dashboard') }}
    </x-nav-link>
</div>
