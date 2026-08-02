<?php

use function Livewire\Volt\{layout, title};

layout('layouts.app');
title('Aura Wire — Demo Portals');

?>

<div class="relative min-h-screen flex flex-col items-center justify-center w-full max-w-5xl mx-auto px-4 py-12 space-y-10">
    <!-- Top Floating Theme Switcher -->
    <div class="absolute top-6 right-6 z-20">
        <x-theme-switcher />
    </div>

    <!-- Hero Header -->
    <div class="text-center space-y-3 max-w-3xl mx-auto pt-6 sm:pt-0">
        <x-aura::kicker>⚡ Livewire Volt &amp; Aura Wire</x-aura::kicker>
        <x-aura::heading level="1" size="display-lg" class="text-zinc-900 dark:text-white">
            Aura Wire <span class="underline decoration-zinc-400 dark:decoration-zinc-600 underline-offset-8">Showcase</span>
        </x-aura::heading>
        <x-aura::subheading>
            Explore package UI components and test layout environment architectures built for Laravel.
        </x-aura::subheading>
    </div>

    <!-- SEPARATE FEATURED SECTION: Component Library Card -->
    <div class="w-full relative overflow-hidden rounded-2xl bg-zinc-900 text-white border border-zinc-800 p-8 shadow-xl">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
            <div class="space-y-3 max-w-2xl">
                <div class="flex items-center gap-3">
                    <div class="h-10 w-10 rounded-xl bg-white text-zinc-900 flex items-center justify-center font-bold shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                    <div>
                        <x-aura::kicker class="text-zinc-400">Package Component Library</x-aura::kicker>
                        <x-aura::heading level="2" size="lg" class="text-white">Aura Wire Components</x-aura::heading>
                    </div>
                </div>
                <x-aura::text variant="subtle" size="md" class="text-zinc-300">
                    Interactive documentation and live showcase for all Blade &amp; Livewire package components — variants, sizes, icon slots, states, and code snippets.
                </x-aura::text>
            </div>

            <div class="shrink-0">
                <x-aura::button variant="primary" size="lg" href="/components" class="w-full md:w-auto">
                    View Component Library &rarr;
                </x-aura::button>
            </div>
        </div>
    </div>

    <!-- SEPARATE SECTION: Layout Environments (3 Cards Grid) -->
    <div class="w-full space-y-4 pt-4">
        <div class="border-b border-zinc-200 dark:border-zinc-800 pb-3 flex items-center justify-between">
            <div>
                <x-aura::heading level="3" size="md">Layout Environments</x-aura::heading>
                <x-aura::text variant="subtle" size="sm">Select a layout portal to experience its context, headers, and sidebars</x-aura::text>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">
            
            <!-- Card 1: Guest Portal -->
            <x-aura::card>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-blue-600/10 text-blue-600 dark:text-blue-400 border border-blue-600/20 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </div>
                        <x-aura::badge variant="neutral">Public</x-aura::badge>
                    </div>

                    <div>
                        <x-aura::heading level="4" size="sm">Guest Portal</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-2">
                            Public-facing portal for unauthenticated visitors. Displays component showcases and sign in layout.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="secondary" class="w-full" href="/guest">
                        Explore Guest &rarr;
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

            <!-- Card 2: User Workspace -->
            <x-aura::card>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-blue-600/10 text-blue-600 dark:text-blue-400 border border-blue-600/20 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <x-aura::badge variant="positive">Member</x-aura::badge>
                    </div>

                    <div>
                        <x-aura::heading level="4" size="sm">User Workspace</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-2">
                            Authenticated user workspace layout with top navigation, member status badge, and project metrics.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="outline" class="w-full" href="/dashboard">
                        Launch Workspace &rarr;
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

            <!-- Card 3: Admin Console -->
            <x-aura::card>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-red-600/10 text-red-600 dark:text-red-400 border border-red-600/20 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <x-aura::badge variant="negative">Admin</x-aura::badge>
                    </div>

                    <div>
                        <x-aura::heading level="4" size="sm">Admin Console</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-2">
                            System administrator layout with a dedicated sidebar navigation, system health metrics, and logs.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="danger" class="w-full" href="/admin">
                        Access Admin Console &rarr;
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

        </div>
    </div>
</div>
