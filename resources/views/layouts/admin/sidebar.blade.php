<x-aura::sidebar>
    <x-slot:header>
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-2 py-1 group">
            <div class="h-8 w-8 rounded-lg bg-gradient-to-tr from-red-600 to-amber-500 flex items-center justify-center font-bold text-white shadow-md shadow-red-500/20 group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <x-aura::heading level="1" size="xs" class="group-hover:text-red-600 dark:group-hover:text-red-400">Admin Control</x-aura::heading>
                <x-aura::text size="xs" variant="subtle">Aura Wire System</x-aura::text>
            </div>
        </a>
    </x-slot:header>

    <x-aura::sidebar.heading>Core</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/admin" :active="request()->is('admin')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
        </x-slot:icon>
        Dashboard
    </x-aura::sidebar.item>

    <x-aura::sidebar.heading>System</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/components" :active="request()->is('components*')" badge="Library">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </x-slot:icon>
        Package Components
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/users">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </x-slot:icon>
        User Management
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/logs">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        </x-slot:icon>
        System Logs
    </x-aura::sidebar.item>

    <x-slot:footer>
        <div class="flex items-center justify-between text-xs">
            <x-aura::text size="xs" variant="subtle">DDEV Local</x-aura::text>
            <x-aura::badge variant="negative">Admin</x-aura::badge>
        </div>
    </x-slot:footer>
</x-aura::sidebar>
