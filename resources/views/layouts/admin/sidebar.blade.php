<x-aura::sidebar>
    <x-slot:header>
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-2 py-1 group">
            <div class="h-8 w-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-sm group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <x-aura::heading level="1" size="xs" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 font-extrabold tracking-tight">Aura Wire</x-aura::heading>
                <x-aura::text size="xs" variant="subtle" class="text-[11px]">Admin Console</x-aura::text>
            </div>
        </a>
    </x-slot:header>

    <x-aura::sidebar.heading>Portals</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/components" :active="request()->is('components*')" badge="Docs">
        <x-slot:icon>
            <x-aura::icon name="layers" class="w-4 h-4 text-zinc-900 dark:text-white" />
        </x-slot:icon>
        Components
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/guest" :active="request()->is('guest*')">
        <x-slot:icon>
            <x-aura::icon name="globe" class="w-4 h-4 text-zinc-900 dark:text-white" />
        </x-slot:icon>
        Guest
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/dashboard" :active="request()->is('dashboard*')">
        <x-slot:icon>
            <x-aura::icon name="user" class="w-4 h-4 text-zinc-900 dark:text-white" />
        </x-slot:icon>
        User
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin" :active="request()->is('admin')">
        <x-slot:icon>
            <x-aura::icon name="shield-check" class="w-4 h-4 text-zinc-900 dark:text-white" />
        </x-slot:icon>
        Admin
    </x-aura::sidebar.item>

    <x-aura::sidebar.heading>Core</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/admin" :active="request()->is('admin')">
        <x-slot:icon>
            <x-aura::icon name="layout-dashboard" class="w-4 h-4 text-zinc-900 dark:text-white" />
        </x-slot:icon>
        Dashboard
    </x-aura::sidebar.item>

    <x-aura::sidebar.heading>System</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/admin/users" :active="request()->is('admin/users*')">
        <x-slot:icon>
            <x-aura::icon name="users" class="w-4 h-4 text-zinc-900 dark:text-white" />
        </x-slot:icon>
        Users
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/logs" :active="request()->is('admin/logs*')">
        <x-slot:icon>
            <x-aura::icon name="file-text" class="w-4 h-4 text-zinc-900 dark:text-white" />
        </x-slot:icon>
        Logs
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/settings" :active="request()->is('admin/settings*')">
        <x-slot:icon>
            <x-aura::icon name="settings" class="w-4 h-4 text-zinc-900 dark:text-white" />
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
