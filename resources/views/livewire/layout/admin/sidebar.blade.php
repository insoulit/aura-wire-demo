<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::sidebar>
    <x-slot:header>
        <a href="{{ route('home') }}" class="flex items-center gap-3 px-2 py-1 group">
            <div class="h-8 w-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-sm group-hover:scale-105 transition-transform duration-200">
                A
            </div>
            <div>
                <x-aura::heading level="1" size="xs" >Aura Wire</x-aura::heading>
                <x-aura::text size="xs" variant="subtle" >Admin Console</x-aura::text>
            </div>
        </a>
    </x-slot:header>

    <x-aura::sidebar.heading>Core</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/admin" :active="request()->is('admin')">
        <x-slot:icon>
            <x-aura::icon name="layout-dashboard"  size="xs" />
        </x-slot:icon>
        Dashboard
    </x-aura::sidebar.item>

    <x-aura::sidebar.heading>System</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="/admin/users" :active="request()->is('admin/users*')">
        <x-slot:icon>
            <x-aura::icon name="users"  size="xs" />
        </x-slot:icon>
        Users
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/logs" :active="request()->is('admin/logs*')">
        <x-slot:icon>
            <x-aura::icon name="file-text"  size="xs" />
        </x-slot:icon>
        Logs
    </x-aura::sidebar.item>
    <x-aura::sidebar.item href="/admin/setting" :active="request()->is('admin/setting*')">
        <x-slot:icon>
            <x-aura::icon name="settings"  size="xs" />
        </x-slot:icon>
        Settings
    </x-aura::sidebar.item>

    <div class="mt-auto pt-4 border-t border-zinc-100 dark:border-zinc-800/80 space-y-1">
        <x-aura::sidebar.heading>Portals</x-aura::sidebar.heading>
        <x-aura::sidebar.item href="/components" :active="request()->is('components*')" badge="Docs">
            <x-slot:icon>
                <x-aura::icon name="layers"  size="xs" />
            </x-slot:icon>
            Components
        </x-aura::sidebar.item>
        <x-aura::sidebar.item href="/guest" :active="request()->is('guest*')">
            <x-slot:icon>
                <x-aura::icon name="globe"  size="xs" />
            </x-slot:icon>
            Guest
        </x-aura::sidebar.item>
        <x-aura::sidebar.item href="/dashboard" :active="request()->is('dashboard*')">
            <x-slot:icon>
                <x-aura::icon name="user"  size="xs" />
            </x-slot:icon>
            User
        </x-aura::sidebar.item>
        <x-aura::sidebar.item href="/admin" :active="false">
            <x-slot:icon>
                <x-aura::icon name="shield-check"  size="xs" />
            </x-slot:icon>
            Admin
        </x-aura::sidebar.item>
    </div>

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
