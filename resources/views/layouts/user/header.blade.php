<x-aura::header>
    <x-slot:brand>
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div class="h-9 w-9 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-violet-500 flex items-center justify-center font-bold text-white shadow-md shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <h1 class="text-sm font-semibold tracking-tight text-zinc-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Aura Wire</h1>
                <p class="text-xs text-zinc-500 dark:text-zinc-400">User Workspace</p>
            </div>
        </a>
    </x-slot:brand>

    <div class="hidden md:flex items-center gap-1">
        <x-aura::header.item href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-aura::header.item>
        <x-aura::header.item href="/components" :active="request()->is('components*')">Components</x-aura::header.item>
        <x-aura::header.item href="/projects">Projects</x-aura::header.item>
        <x-aura::header.item href="/settings">Settings</x-aura::header.item>
    </div>

    <x-slot:actions>
        <x-aura::badge variant="positive">Member</x-aura::badge>
        <x-theme-switcher />
        <x-aura::avatar initials="US" size="sm" status="online" />
    </x-slot:actions>
</x-aura::header>
