<?php

use function Livewire\Volt\{layout, title};

layout('layouts.user');
title('User Dashboard — Aura Wire');

?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-5">
        <div>
            <x-aura::heading level="1" size="lg">User Dashboard</x-aura::heading>
            <x-aura::subheading>Welcome back to your workspace</x-aura::subheading>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="secondary" size="sm">Export Data</x-aura::button>
            <x-aura::button variant="primary" size="sm">
                <x-slot:icon>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                </x-slot:icon>
                New Project
            </x-aura::button>
        </div>
    </div>

    <!-- Quick Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Total Projects</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1">12</x-aura::heading>
            <x-aura::text variant="positive" size="xs" class="mt-2">+2 this month</x-aura::text>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Active Components</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1">48</x-aura::heading>
            <x-aura::text variant="accent" size="xs" class="mt-2">Aura Wire UI</x-aura::text>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Account Status</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-emerald-600 dark:text-emerald-400">Active</x-aura::heading>
            <x-aura::badge variant="positive" class="mt-2">Pro Plan</x-aura::badge>
        </x-aura::card>
    </div>

    <!-- Interactive Component Demo Card -->
    <x-aura::card title="Quick Actions">
        <div class="flex flex-wrap items-center gap-4">
            <x-aura::button.group>
                <x-aura::button variant="secondary" size="sm">Overview</x-aura::button>
                <x-aura::button variant="secondary" size="sm">Analytics</x-aura::button>
                <x-aura::button variant="secondary" size="sm">Reports</x-aura::button>
            </x-aura::button.group>
            
            <x-aura::button variant="outline" size="sm">Manage Profile</x-aura::button>
            <x-aura::button variant="danger" size="sm">Archive Workspace</x-aura::button>
        </div>
    </x-aura::card>
</div>
