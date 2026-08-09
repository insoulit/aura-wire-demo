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
                <x-aura::kicker class="text-zinc-500">ADMIN CONSOLE</x-aura::kicker>
                <x-aura::badge variant="neutral" size="sm">System Operational</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="lg">System Management &amp; Analytics</x-aura::heading>
            <x-aura::subheading size="xs">Monitor insoulit/aura-wire package state, cached views, and user registries</x-aura::subheading>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="secondary" size="sm" href="/optimize-clear" target="_blank">
                <x-aura::icon name="refresh-cw" class="w-4 h-4 mr-1.5 text-zinc-900 dark:text-white" />
                <span>Clear Caches</span>
            </x-aura::button>
            <x-aura::button variant="primary" size="sm" href="https://packagist.org/packages/insoulit/aura-wire" target="_blank">
                <span>Packagist Package</span>
                <x-aura::icon name="arrow-right" class="w-4 h-4 ml-1.5 inline-block" />
            </x-aura::button>
        </div>
    </div>

    <!-- Admin System Metrics -->
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Total Registrations</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1">1,248</x-aura::heading>
            <x-aura::badge variant="neutral" class="mt-2 text-[10px]">+14% this week</x-aura::badge>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Package Symlink</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-zinc-900 dark:text-white">@dev</x-aura::heading>
            <x-aura::badge variant="neutral" class="mt-2 text-[10px]">packages/aura-wire</x-aura::badge>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">PHP Runtime</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-zinc-900 dark:text-white">v8.3+</x-aura::heading>
            <x-aura::badge variant="subtle" class="mt-2 text-[10px]">Strict Types</x-aura::badge>
        </x-aura::card>

        <x-aura::card>
            <x-aura::text variant="subtle" size="xs">Livewire Volt</x-aura::text>
            <x-aura::heading level="2" size="xl" class="mt-1 text-zinc-900 dark:text-white">v1.11</x-aura::heading>
            <x-aura::badge variant="subtle" class="mt-2 text-[10px]">Functional Routing</x-aura::badge>
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
                    <x-aura::table.cell><code class="text-xs font-mono text-zinc-900 dark:text-zinc-200">&lt;aura:heading&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/heading">
                            <span>Inspect</span>
                            <x-aura::icon name="chevron-right" class="w-3.5 h-3.5 ml-1 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all inline-block" />
                        </x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Form Controls</x-aura::table.cell>
                    <x-aura::table.cell>10 Components</x-aura::table.cell>
                    <x-aura::table.cell><code class="text-xs font-mono text-zinc-900 dark:text-zinc-200">&lt;aura:input&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/input">
                            <span>Inspect</span>
                            <x-aura::icon name="chevron-right" class="w-3.5 h-3.5 ml-1 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all inline-block" />
                        </x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Display &amp; Data</x-aura::table.cell>
                    <x-aura::table.cell>11 Components</x-aura::table.cell>
                    <x-aura::table.cell><code class="text-xs font-mono text-zinc-900 dark:text-zinc-200">&lt;aura:card&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/card">
                            <span>Inspect</span>
                            <x-aura::icon name="chevron-right" class="w-3.5 h-3.5 ml-1 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all inline-block" />
                        </x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Overlays &amp; Feedback</x-aura::table.cell>
                    <x-aura::table.cell>6 Components</x-aura::table.cell>
                    <x-aura::table.cell><code class="text-xs font-mono text-zinc-900 dark:text-zinc-200">&lt;aura:modal&gt;</code></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral">Registered</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs" href="/components/modal">
                            <span>Inspect</span>
                            <x-aura::icon name="chevron-right" class="w-3.5 h-3.5 ml-1 text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-all inline-block" />
                        </x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>
            </x-aura::table.body>
        </x-aura::table>
    </x-aura::card>
</div>
