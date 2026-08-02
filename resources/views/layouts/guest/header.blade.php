<x-aura::header>
    <x-slot name="brand">
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div class="h-9 w-9 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-sm group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <x-aura::heading level="1" size="xs" class="group-hover:text-blue-600 dark:group-hover:text-blue-400 font-extrabold tracking-tight">Aura Wire</x-aura::heading>
                <x-aura::text size="xs" variant="subtle" class="text-[11px] font-medium">Guest Portal</x-aura::text>
            </div>
        </a>
    </x-slot>

    <div class="flex items-center justify-center gap-1.5">
        <x-aura::header.item href="/components" :active="request()->is('components*')">Components</x-aura::header.item>
        <x-aura::header.item href="/guest" :active="request()->is('guest*')">Guest</x-aura::header.item>
        <x-aura::header.item href="/dashboard" :active="request()->is('dashboard*')">User</x-aura::header.item>
        <x-aura::header.item href="/admin" :active="request()->is('admin*')">Admin</x-aura::header.item>
    </div>

    <x-slot name="actions">
        <x-theme-switcher />
    </x-slot>
</x-aura::header>
