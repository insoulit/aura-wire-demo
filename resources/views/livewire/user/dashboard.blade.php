<?php

use function Livewire\Volt\{layout, title};

layout('layouts.user');
title('User Dashboard — Aura Wire');

?>

<div class="space-y-8">
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-800 pb-5">
        <div>
            <h1 class="text-2xl font-bold text-white tracking-tight">User Dashboard</h1>
            <p class="text-xs text-zinc-400">Welcome back to your workspace</p>
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
        <div class="p-6 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-2">
            <span class="text-xs font-medium text-zinc-400">Total Projects</span>
            <p class="text-3xl font-bold text-white">12</p>
            <span class="text-xs text-emerald-400 font-medium">+2 this month</span>
        </div>
        <div class="p-6 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-2">
            <span class="text-xs font-medium text-zinc-400">Active Components</span>
            <p class="text-3xl font-bold text-white">48</p>
            <span class="text-xs text-indigo-400 font-medium">Aura Wire UI</span>
        </div>
        <div class="p-6 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-2">
            <span class="text-xs font-medium text-zinc-400">Account Status</span>
            <p class="text-3xl font-bold text-emerald-400">Active</p>
            <span class="text-xs text-zinc-400">Pro Plan</span>
        </div>
    </div>

    <!-- Interactive Component Demo Card -->
    <div class="p-8 rounded-2xl bg-zinc-900/60 border border-zinc-800 space-y-6">
        <h2 class="text-lg font-semibold text-white">Quick Actions</h2>
        <div class="flex flex-wrap items-center gap-4">
            <x-aura::button.group>
                <x-aura::button variant="secondary" size="sm">Overview</x-aura::button>
                <x-aura::button variant="secondary" size="sm">Analytics</x-aura::button>
                <x-aura::button variant="secondary" size="sm">Reports</x-aura::button>
            </x-aura::button.group>
            
            <x-aura::button variant="outline" size="sm">Manage Profile</x-aura::button>
            <x-aura::button variant="danger" size="sm">Archive Workspace</x-aura::button>
        </div>
    </div>
</div>
