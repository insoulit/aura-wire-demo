<x-aura::sidebar>
    <x-slot:header>
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-2 py-1 group">
            <div class="h-8 w-8 rounded-lg bg-gradient-to-tr from-red-600 via-rose-500 to-amber-500 flex items-center justify-center font-bold text-white shadow-md shadow-red-500/20 group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <x-aura::heading level="1" size="xs" class="group-hover:text-red-600 dark:group-hover:text-red-400 font-extrabold tracking-tight">Aura Wire</x-aura::heading>
                <x-aura::text size="xs" variant="subtle" class="text-[11px]">Admin Console</x-aura::text>
            </div>
        </a>
    </x-slot:header>

    <x-aura::sidebar.heading>Portals</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/components" :active="request()->is('components*')" badge="Docs">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
        </x-slot:icon>
        Components
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/guest" :active="request()->is('guest*')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
        </x-slot:icon>
        Guest
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/dashboard" :active="request()->is('dashboard*')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
        </x-slot:icon>
        User
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin" :active="request()->is('admin')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        </x-slot:icon>
        Admin
    </x-aura::sidebar.item>

    <x-aura::sidebar.heading>Core</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/admin" :active="request()->is('admin')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
        </x-slot:icon>
        Dashboard
    </x-aura::sidebar.item>

    <x-aura::sidebar.heading>System</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/admin/users" :active="request()->is('admin/users*')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </x-slot:icon>
        Users
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/logs" :active="request()->is('admin/logs*')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        </x-slot:icon>
        Logs
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/settings" :active="request()->is('admin/settings*')">
        <x-slot:icon>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </x-slot:icon>
        Settings
    </x-aura::sidebar.item>

    <x-slot:footer>
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold text-zinc-500 dark:text-zinc-400">Theme Mode</span>
                <x-theme-switcher />
            </div>
            <div class="flex items-center justify-between text-xs pt-2 border-t border-zinc-100 dark:border-zinc-800">
                <x-aura::text size="xs" variant="subtle">DDEV Local</x-aura::text>
                <x-aura::badge variant="negative">Admin</x-aura::badge>
            </div>
        </div>
    </x-slot:footer>
</x-aura::sidebar>
