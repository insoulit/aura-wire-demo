<x-aura::header>
    <x-slot:brand>
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-emerald-600 via-teal-500 to-indigo-500 flex items-center justify-center font-bold text-white shadow-md shadow-emerald-500/20 group-hover:scale-105 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <div>
                <x-aura::heading level="1" size="xs" class="group-hover:text-emerald-600 dark:group-hover:text-emerald-400">Aura Wire UI</x-aura::heading>
                <x-aura::text size="xs" variant="subtle">Component Docs</x-aura::text>
            </div>
        </a>
    </x-slot:brand>

    <div class="hidden md:flex items-center gap-1">
        <x-aura::header.item href="/components" :active="request()->is('components')">Overview</x-aura::header.item>
        <x-aura::header.item href="/components/button" :active="request()->is('components/button*')">Buttons</x-aura::header.item>
        <x-aura::header.item href="/components/input" :active="request()->is('components/input*')">Inputs</x-aura::header.item>
        <x-aura::header.item href="/components/card" :active="request()->is('components/card*')">Cards</x-aura::header.item>
        <x-aura::header.item href="/components/modal" :active="request()->is('components/modal*')">Modals</x-aura::header.item>
    </div>

    <x-slot:actions>
        <x-theme-switcher />
        <x-aura::button variant="secondary" size="sm" href="{{ route('home') }}">
            &larr; Home Page
        </x-aura::button>
    </x-slot:actions>
</x-aura::header>
