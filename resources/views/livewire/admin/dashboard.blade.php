<?php

use function Livewire\Volt\{layout, title};

layout('layouts.admin');
title('Admin Console — Aura Wire');

?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-5">
        <div>
            <x-aura::heading level="1" size="lg">Admin Console</x-aura::heading>
            <x-aura::subheading>System management & package analytics</x-aura::subheading>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="outline" size="sm">Download Logs</x-aura::button>
            <x-aura::button variant="danger" size="sm">
                <x-slot:icon>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </x-slot:icon>
                Clear Cache
            </x-aura::button>
        </div>
    </div>

    <!-- Admin System Metrics -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Total Users</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1">1,248</x-aura::heading>
        </x-aura::card>
        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Package Status</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-emerald-600 dark:text-emerald-400">Linked</x-aura::heading>
        </x-aura::card>
        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">PHP Version</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-indigo-600 dark:text-indigo-400">8.4</x-aura::heading>
        </x-aura::card>
        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Livewire Volt</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-violet-600 dark:text-violet-400">v1.11</x-aura::heading>
        </x-aura::card>
    </div>

    <!-- Package Management Actions -->
    <x-aura::card title="Package Quick Actions">
        <div class="flex flex-wrap items-center gap-3">
            <x-aura::button variant="primary">Sync Package Autoload</x-aura::button>
            <x-aura::button variant="secondary">Run Unit Tests</x-aura::button>
            <x-aura::button variant="outline">Re-publish Assets</x-aura::button>
        </div>
    </x-aura::card>
</div>
