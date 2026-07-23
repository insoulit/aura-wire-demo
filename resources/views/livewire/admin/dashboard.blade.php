<?php

use function Livewire\Volt\{layout, title};

layout('layouts.admin');
title('Admin Console — Aura Wire');

?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-800 pb-5">
        <div>
            <h1 class="text-2xl font-bold text-white tracking-tight">Admin Console</h1>
            <p class="text-xs text-zinc-400">System management & package analytics</p>
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
        <div class="p-5 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-1">
            <span class="text-xs font-medium text-zinc-400">Total Users</span>
            <p class="text-2xl font-bold text-white">1,248</p>
        </div>
        <div class="p-5 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-1">
            <span class="text-xs font-medium text-zinc-400">Package Status</span>
            <p class="text-2xl font-bold text-emerald-400">Linked</p>
        </div>
        <div class="p-5 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-1">
            <span class="text-xs font-medium text-zinc-400">PHP Version</span>
            <p class="text-2xl font-bold text-indigo-400">8.4</p>
        </div>
        <div class="p-5 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-1">
            <span class="text-xs font-medium text-zinc-400">Livewire Volt</span>
            <p class="text-2xl font-bold text-violet-400">v1.11</p>
        </div>
    </div>

    <!-- Package Management Actions -->
    <div class="p-6 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-4">
        <h2 class="text-lg font-semibold text-white">Package Quick Actions</h2>
        <div class="flex flex-wrap items-center gap-3">
            <x-aura::button variant="primary">Sync Package Autoload</x-aura::button>
            <x-aura::button variant="secondary">Run Unit Tests</x-aura::button>
            <x-aura::button variant="outline">Re-publish Assets</x-aura::button>
        </div>
    </div>
</div>
