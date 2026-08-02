<?php

use function Livewire\Volt\{layout, title};

layout('layouts.admin');
title('Admin Console — Aura Wire');

?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-5">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <x-aura::kicker class="text-indigo-600 dark:text-indigo-400">⚡ ADMIN CONSOLE</x-aura::kicker>
                <x-aura::badge variant="positive" size="sm">System Operational</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="lg">System Management &amp; Analytics</x-aura::heading>
            <x-aura::subheading>Monitor insoulit/aura-wire package state, cached views, and user registries</x-aura::subheading>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="outline" size="sm" href="/optimize-clear" target="_blank">
                <x-slot name="icon">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                </x-slot>
                Clear Caches
            </x-aura::button>
            <x-aura::button variant="primary" size="sm" href="https://packagist.org/packages/insoulit/aura-wire" target="_blank">
                Packagist Package &rarr;
            </x-aura::button>
        </div>
    </div>

    <!-- Admin System Metrics -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Total Registrations</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1">1,248</x-aura::heading>
            <x-aura::badge variant="positive" class="mt-2 text-[10px]">+14% this week</x-aura::badge>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Package Symlink</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-emerald-600 dark:text-emerald-400">@dev</x-aura::heading>
            <x-aura::badge variant="neutral" class="mt-2 text-[10px]">packages/aura-wire</x-aura::badge>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">PHP Runtime</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-indigo-600 dark:text-indigo-400">v8.3+</x-aura::heading>
            <x-aura::badge variant="info" class="mt-2 text-[10px]">Strict Types</x-aura::badge>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Livewire Volt</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-violet-600 dark:text-violet-400">v1.11</x-aura::heading>
            <x-aura::badge variant="accent" class="mt-2 text-[10px]">Functional Routing</x-aura::badge>
        </x-aura::card>
    </div>

    <!-- Admin Data Table Built with Package Components -->
    <x-aura::card title="Active Package Registries" description="Registered components and layout portals active in memory">
        <x-aura::table>
            <x-aura::table.header>
                <tr>
                    <x-aura::table.column>Component Group</x-aura::table.column>
                    <x-aura::table.column>Count</x-aura::table.column>
                    <x-aura::table.column>Shorthand Syntax</x-aura::table.column>
                    <x-aura::table.column>Status</x-aura::table.column>
                    <x-aura::table.column class="text-right">Actions</x-aura::table.column>
                </tr>
            </x-aura::table.header>
            <x-aura::table.body>
                <x-aura::table.row>
                    <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Typography</x-aura::table.cell>
                    <x-aura::table.cell>4 Components</x-aura::table.cell>
                    <x-aura::table.cell><code class="text-xs font-mono text-indigo-500">&lt;aura:heading&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/heading">Inspect &rarr;</x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Form Controls</x-aura::table.cell>
                    <x-aura::table.cell>10 Components</x-aura::table.cell>
                    <x-aura::table.cell><code class="text-xs font-mono text-indigo-500">&lt;aura:input&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/input">Inspect &rarr;</x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Display &amp; Data</x-aura::table.cell>
                    <x-aura::table.cell>11 Components</x-aura::table.cell>
                    <x-aura::table.cell><code class="text-xs font-mono text-indigo-500">&lt;aura:card&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/card">Inspect &rarr;</x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Overlays &amp; Feedback</x-aura::table.cell>
                    <x-aura::table.cell>6 Components</x-aura::table.cell>
                    <x-aura::table.cell><code class="text-xs font-mono text-indigo-500">&lt;aura:modal&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/modal">Inspect &rarr;</x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>
            </x-aura::table.body>
        </x-aura::table>
    </x-aura::card>
</div>
