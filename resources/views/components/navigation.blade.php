<nav x-data="{ open: false }" class="bg-blue-300 border-b border-indigo-200">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :active="request()->routeIs('players.index')" href="{{ route('players.index') }}">
                        {{ __('Jogadores') }}
                    </x-nav-link>
                    <x-nav-link :active="request()->routeIs('teams.index')" href="{{ route('teams.index') }}">
                        {{ __('Times') }}
                    </x-nav-link>
                    <x-nav-link :active="request()->routeIs('teams.index')" href="{{ route('teams.index') }}">
                        {{ __('Ranking') }}
                    </x-nav-link>
                </div>
            </div>
        </div>

    </div>
</nav>
