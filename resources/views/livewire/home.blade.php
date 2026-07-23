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
        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 text-xs font-semibold uppercase tracking-wider">
            ⚡ Livewire Volt & Aura Wire
        </div>
        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-zinc-900 dark:text-white">
            Aura Wire <span class="bg-gradient-to-r from-indigo-500 via-violet-500 to-pink-500 dark:from-indigo-400 dark:via-violet-400 dark:to-pink-400 bg-clip-text text-transparent">Showcase</span>
        </h1>
        <p class="text-zinc-600 dark:text-zinc-400 text-sm sm:text-base leading-relaxed">
            Explore package UI components and test layout environment architectures.
        </p>
    </div>

    <!-- SEPARATE FEATURED SECTION: Component Library Card -->
    <div class="w-full relative overflow-hidden rounded-2xl bg-gradient-to-r from-indigo-500/10 via-purple-500/10 to-pink-500/10 dark:from-indigo-950/40 dark:via-purple-950/40 dark:to-zinc-900/80 border border-indigo-500/20 dark:border-indigo-500/30 p-8 shadow-xl">
        <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 relative z-10">
            <div class="space-y-3 max-w-2xl">
                <div class="flex items-center gap-3">
                    <div class="h-10 w-10 rounded-xl bg-indigo-600 text-white flex items-center justify-center font-bold shadow-md shadow-indigo-500/20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Package Component Library</span>
                        <h2 class="text-2xl font-bold text-zinc-900 dark:text-white">Aura Wire Components</h2>
                    </div>
                </div>
                <p class="text-xs sm:text-sm text-zinc-600 dark:text-zinc-300 leading-relaxed">
                    Interactive documentation and live showcase for all Blade & Livewire package components — variants, sizes, icon slots, states, and code snippets.
                </p>
            </div>

            <div class="shrink-0">
                <x-aura::button variant="primary" size="lg" href="/components" class="w-full md:w-auto shadow-lg shadow-indigo-500/20">
                    View Component Library &rarr;
                </x-aura::button>
            </div>
        </div>
    </div>

    <!-- SEPARATE SECTION: Layout Environments (3 Cards Grid) -->
    <div class="w-full space-y-4 pt-4">
        <div class="border-b border-zinc-200 dark:border-zinc-800 pb-3 flex items-center justify-between">
            <div>
                <h3 class="text-lg font-bold text-zinc-900 dark:text-white">Layout Environments</h3>
                <p class="text-xs text-zinc-500 dark:text-zinc-400">Select a layout portal to experience its context, headers, and sidebars</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">
            
            <!-- Card 1: Guest Portal -->
            <div class="group relative rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 p-6 flex flex-col justify-between hover:border-indigo-500/50 hover:shadow-xl hover:shadow-indigo-500/5 transition-all duration-300 shadow-sm">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 border border-indigo-500/20 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-full bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 border border-zinc-200 dark:border-zinc-700 text-xs font-medium">Public</span>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold text-zinc-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Guest Portal</h4>
                        <p class="text-xs text-zinc-600 dark:text-zinc-400 mt-2 leading-relaxed">
                            Public-facing portal for unauthenticated visitors. Displays component showcases and sign in layout.
                        </p>
                    </div>
                </div>

                <div class="pt-6">
                    <x-aura::button variant="secondary" class="w-full" href="/guest">
                        Explore Guest &rarr;
                    </x-aura::button>
                </div>
            </div>

            <!-- Card 2: User Workspace -->
            <div class="group relative rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 p-6 flex flex-col justify-between hover:border-violet-500/50 hover:shadow-xl hover:shadow-violet-500/5 transition-all duration-300 shadow-sm">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400 border border-violet-500/20 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-full bg-violet-500/10 text-violet-600 dark:text-violet-400 border border-violet-500/20 text-xs font-medium">Member</span>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold text-zinc-900 dark:text-white group-hover:text-violet-600 dark:group-hover:text-violet-400 transition-colors">User Workspace</h4>
                        <p class="text-xs text-zinc-600 dark:text-zinc-400 mt-2 leading-relaxed">
                            Authenticated user workspace layout with top navigation, member status badge, and project metrics.
                        </p>
                    </div>
                </div>

                <div class="pt-6">
                    <x-aura::button variant="outline" class="w-full" href="/dashboard">
                        Launch Workspace &rarr;
                    </x-aura::button>
                </div>
            </div>

            <!-- Card 3: Admin Console -->
            <div class="group relative rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 p-6 flex flex-col justify-between hover:border-red-500/50 hover:shadow-xl hover:shadow-red-500/5 transition-all duration-300 shadow-sm">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="h-10 w-10 rounded-xl bg-red-500/10 text-red-600 dark:text-red-400 border border-red-500/20 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <span class="px-2.5 py-1 rounded-full bg-red-500/10 text-red-600 dark:text-red-400 border border-red-500/20 text-xs font-medium">Admin</span>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold text-zinc-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">Admin Console</h4>
                        <p class="text-xs text-zinc-600 dark:text-zinc-400 mt-2 leading-relaxed">
                            System administrator layout with a dedicated sidebar navigation, system health metrics, and logs.
                        </p>
                    </div>
                </div>

                <div class="pt-6">
                    <x-aura::button variant="danger" class="w-full" href="/admin">
                        Access Admin Console &rarr;
                    </x-aura::button>
                </div>
            </div>

        </div>
    </div>
</div>
