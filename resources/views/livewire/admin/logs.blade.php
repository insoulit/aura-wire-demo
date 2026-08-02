<?php

use function Livewire\Volt\{layout, title};

layout('layouts.admin');
title('System Logs — Admin Console | Aura Wire');

?>

<div class="space-y-8">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-5">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <x-aura::kicker class="text-zinc-500">⚡ SYSTEM LOGS</x-aura::kicker>
                <x-aura::badge variant="neutral" size="sm">Realtime Pail Log Stream</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="lg">System Logs &amp; Activity</x-aura::heading>
            <x-aura::subheading>Inspect application event streams, exception traces, and package runtime logs</x-aura::subheading>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="outline" size="sm">Export CSV</x-aura::button>
            <x-aura::button variant="danger" size="sm">Clear Log File</x-aura::button>
        </div>
    </div>

    <!-- Logs Table Card -->
    <x-aura::card title="Application Log Stream">
        <x-aura::table>
            <x-aura::table.header>
                <tr>
                    <x-aura::table.column>Timestamp</x-aura::table.column>
                    <x-aura::table.column>Level</x-aura::table.column>
                    <x-aura::table.column>Environment</x-aura::table.column>
                    <x-aura::table.column>Message</x-aura::table.column>
                    <x-aura::table.column class="text-right">Action</x-aura::table.column>
                </tr>
            </x-aura::table.header>
            <x-aura::table.body>
                <x-aura::table.row>
                    <x-aura::table.cell class="text-xs font-mono text-zinc-500">19:32:05</x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral">INFO</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs">local</x-aura::table.cell>
                    <x-aura::table.cell class="font-mono text-xs text-zinc-800 dark:text-zinc-200">Compiled views cleared successfully via ddev artisan view:clear.</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs">View Trace</x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="text-xs font-mono text-zinc-500">19:28:40</x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="info">NOTICE</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs">local</x-aura::table.cell>
                    <x-aura::table.cell class="font-mono text-xs text-zinc-800 dark:text-zinc-200">Aura Wire ServiceProvider registered 9 component group anonymous paths.</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs">View Trace</x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell class="text-xs font-mono text-zinc-500">19:22:10</x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="subtle">WARNING</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs">local</x-aura::table.cell>
                    <x-aura::table.cell class="font-mono text-xs text-zinc-800 dark:text-zinc-200">View cache empty for route [components.installation]. Recompiled template.</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <x-aura::button variant="ghost" size="xs">View Trace</x-aura::button>
                    </x-aura::table.cell>
                </x-aura::table.row>
            </x-aura::table.body>
        </x-aura::table>
    </x-aura::card>
</div>
