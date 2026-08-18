<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::sidebar>

    <x-slot:header>

        <x-aura::link href="{{ route('home') }}" underline="none">

            <x-aura::flex align="center" gap="sm">

                <x-aura::icon name="sparkles" size="md" variant="dark" />

                <x-aura::flex direction="col" gap="none">

                    <x-aura::heading level="1" size="xs" weight="extrabold">
                        Aura Wire
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="muted" weight="medium">
                        Admin Console
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-aura::link>

    </x-slot:header>

    <x-aura::sidebar.heading>
        Core
    </x-aura::sidebar.heading>

    <x-aura::sidebar.item href="/admin" icon="layout-dashboard" :active="request()->is('admin')">
        Dashboard
    </x-aura::sidebar.item>

    <x-aura::sidebar.heading>
        System
    </x-aura::sidebar.heading>

    <x-aura::sidebar.item href="/admin/users" icon="users" :active="request()->is('admin/users*')">
        Users
    </x-aura::sidebar.item>

    <x-aura::sidebar.item href="/admin/logs" icon="file-text" :active="request()->is('admin/logs*')">
        Logs
    </x-aura::sidebar.item>

    <x-aura::sidebar.item href="/admin/setting" icon="settings" :active="request()->is('admin/setting*')">
        Settings
    </x-aura::sidebar.item>

    <x-aura::separator />

    <x-aura::sidebar.heading>
        Portals
    </x-aura::sidebar.heading>

    <x-aura::sidebar.item href="/components" icon="layers" :active="request()->is('components*')" badge="Docs">
        Components
    </x-aura::sidebar.item>

    <x-aura::sidebar.item href="/guest" icon="globe" :active="request()->is('guest*')">
        Guest
    </x-aura::sidebar.item>

    <x-aura::sidebar.item href="/user" icon="user" :active="request()->is('user*')">
        User
    </x-aura::sidebar.item>

    <x-aura::sidebar.item href="/admin" icon="shield-check" :active="false">
        Admin
    </x-aura::sidebar.item>

    <x-slot:footer>

        <x-aura::flex direction="col" gap="sm">

            <x-aura::flex align="center" justify="between">

                <x-aura::text size="sm" variant="muted" weight="semibold">
                    Theme Mode
                </x-aura::text>

                <x-theme-switcher />

            </x-aura::flex>

            <x-aura::separator />

            <x-aura::flex align="center" justify="between">

                <x-aura::text size="sm" variant="subtle">
                    DDEV Local
                </x-aura::text>

                <x-aura::badge variant="negative">
                    Admin
                </x-aura::badge>

            </x-aura::flex>

        </x-aura::flex>

    </x-slot:footer>

</x-aura::sidebar>
