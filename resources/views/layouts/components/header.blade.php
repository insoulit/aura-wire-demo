<x-aura::header>
    <x-slot name="brand">
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div class="h-9 w-9 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-sm group-hover:scale-105 transition-transform duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <div>
                <x-aura::heading level="1" size="xs" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 font-extrabold tracking-tight">Aura Wire UI</x-aura::heading>
                <x-aura::text size="xs" variant="subtle" class="text-[11px] font-medium">Component Docs</x-aura::text>
            </div>
        </a>
    </x-slot>

    <x-aura::header.item href="/components" :active="request()->is('components*')">Components</x-aura::header.item>
    <x-aura::header.item href="/guest" :active="request()->is('guest*')">Guest</x-aura::header.item>
    <x-aura::header.item href="/dashboard" :active="request()->is('dashboard*')">User</x-aura::header.item>
    <x-aura::header.item href="/admin" :active="request()->is('admin*')">Admin</x-aura::header.item>

    <x-slot name="actions">
        <!-- Mobile Sidebar Trigger -->
        <div class="lg:hidden">
            <x-aura::icon-button
                icon="panel-left"
                variant="ghost"
                size="sm"
                label="Component Menu"
                x-on:click="$dispatch('open-sheet', 'components-mobile-sidebar')"
            />
        </div>
        <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold text-zinc-700 dark:text-zinc-300 hover:text-zinc-900 dark:hover:text-white bg-zinc-100/80 dark:bg-zinc-800/80 hover:bg-zinc-200 dark:hover:bg-zinc-800 rounded-xl border border-zinc-200/80 dark:border-zinc-700/60 transition-all">
            <svg class="w-4 h-4 text-zinc-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span>Packagist</span>
        </a>
        <x-theme-switcher />
    </x-slot>
</x-aura::header>
