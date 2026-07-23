<x-aura::header>
    <x-slot:brand>
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center font-bold text-white shadow-md shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <x-aura::heading level="1" size="xs" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400">Aura Wire</x-aura::heading>
                <x-aura::text size="xs" variant="subtle">Guest Portal</x-aura::text>
            </div>
        </a>
    </x-slot:brand>

    <div class="flex items-center gap-1">
        <x-aura::header.item href="/guest" :active="request()->is('guest')">Guest Home</x-aura::header.item>
        <x-aura::header.item href="/components" :active="request()->is('components*')">Components</x-aura::header.item>
        <x-aura::header.item href="/login">Sign In</x-aura::header.item>
    </div>

    <x-slot:actions>
        <x-aura::button variant="primary" size="sm" href="/register">Get Started</x-aura::button>
        <x-theme-switcher />
    </x-slot:actions>
</x-aura::header>
