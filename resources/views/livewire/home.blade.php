<?php

use function Livewire\Volt\{layout, title};

layout('layouts.app');
title('Aura Wire — Modern Blade & Livewire UI Components for Laravel');

?>

<div class="w-full space-y-20 pb-16">

    <!-- 1. Hero Section (100% Viewport Height) -->
    <section class="min-h-[calc(100vh-5rem)] flex flex-col justify-between items-center max-w-4xl mx-auto px-4 py-8 text-center">
        <!-- Top Empty Spacer for Vertical Balance -->
        <div></div>

        <!-- Hero Content (Centered) -->
        <div class="space-y-6 max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-zinc-100 dark:bg-zinc-800/80 border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs">
                <x-aura::badge variant="positive" size="sm">v1.3.0</x-aura::badge>
                <x-aura::text size="xs" variant="subtle" class="font-medium">Laravel 11/12 &amp; Livewire 3 Component Suite</x-aura::text>
            </div>

            <x-aura::heading level="1" size="display-xl" class="tracking-tight text-zinc-900 dark:text-white">
                Aura Wire UI Component Suite
            </x-aura::heading>

            <x-aura::subheading size="lg" class="max-w-xl mx-auto text-zinc-600 dark:text-zinc-400">
                Clean, unstyled-first Blade &amp; Livewire components crafted for modern Laravel applications.
            </x-aura::subheading>

            <!-- CTA Buttons -->
            <div class="pt-3 flex flex-wrap items-center justify-center gap-3.5">
                <x-aura::button variant="primary" size="lg" href="/components" class="shadow-sm">
                    Browse Components &rarr;
                </x-aura::button>

                <x-aura::button variant="primary" size="lg" href="/components/installation">
                    Quick Setup &rarr;
                </x-aura::button>
            </div>
        </div>

        <!-- Bottom Scroll Down Hint -->
        <div class="pt-8 flex flex-col items-center gap-1.5 text-zinc-400 animate-bounce">
            <span class="text-[11px] font-medium tracking-wider uppercase">Scroll For Demos</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
        </div>
    </section>

    <!-- 2. Application Layout Portals (Elevated Interactive Showcase) -->
    <section class="max-w-6xl mx-auto px-4 space-y-10 pt-4">
        <div class="text-center space-y-2 max-w-xl mx-auto">
            <x-aura::kicker>Layout Architectures</x-aura::kicker>
            <x-aura::heading level="2" size="lg">Explore Application Layouts</x-aura::heading>
            <x-aura::subheading size="sm">
                Interactive layout environment templates built with Aura Wire components.
            </x-aura::subheading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Portal 1: Guest Portal -->
            <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center font-bold border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs group-hover:scale-105 transition-transform">
                            <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </div>
                        <x-aura::badge variant="neutral" size="sm">Public Portal</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none">
                        <div class="h-3 rounded bg-zinc-300 dark:bg-zinc-700/80 w-full flex items-center justify-between px-2">
                            <div class="h-1.5 w-8 rounded bg-zinc-400 dark:bg-zinc-600"></div>
                            <div class="h-1.5 w-12 rounded bg-zinc-400 dark:bg-zinc-600"></div>
                        </div>
                        <div class="h-14 rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center">
                            <span class="text-[10px] font-mono text-zinc-500 dark:text-zinc-400">Hero Layout</span>
                        </div>
                    </div>

                    <!-- Info -->
                    <div>
                        <x-aura::heading level="3" size="xs">Guest Layout</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1.5 leading-relaxed">
                            Public-facing portal layout for landing pages, marketing features, and authentication screens.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="primary" size="md" class="w-full justify-between" href="/guest">
                        <span>Explore Guest Portal</span>
                        <span>&rarr;</span>
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

            <!-- Portal 2: User Workspace -->
            <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center font-bold border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs group-hover:scale-105 transition-transform">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <x-aura::badge variant="positive" size="sm">Member Portal</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none">
                        <div class="h-3 rounded bg-emerald-500/20 dark:bg-emerald-950/60 border border-emerald-500/30 w-full flex items-center justify-between px-2">
                            <div class="h-1.5 w-10 rounded bg-emerald-600 dark:bg-emerald-400"></div>
                            <div class="h-1.5 w-4 rounded-full bg-emerald-600 dark:bg-emerald-400"></div>
                        </div>
                        <div class="grid grid-cols-2 gap-1.5 h-14">
                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                                <div class="h-1.5 w-6 bg-zinc-400 dark:bg-zinc-600 rounded"></div>
                                <div class="h-3 w-8 bg-zinc-400 dark:bg-zinc-500 rounded"></div>
                            </div>
                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                                <div class="h-1.5 w-6 bg-zinc-400 dark:bg-zinc-600 rounded"></div>
                                <div class="h-3 w-8 bg-zinc-400 dark:bg-zinc-500 rounded"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div>
                        <x-aura::heading level="3" size="xs">User Workspace</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1.5 leading-relaxed">
                            Authenticated member workspace layout featuring a header navbar, status badges, and project metrics.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="primary" size="md" class="w-full justify-between" href="/dashboard">
                        <span>Launch Workspace</span>
                        <span>&rarr;</span>
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

            <!-- Portal 3: Admin Console -->
            <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="w-10 h-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold border border-transparent shadow-2xs group-hover:scale-105 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <x-aura::badge variant="primary" size="sm">Admin Portal</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 flex gap-2 h-[76px] select-none">
                        <!-- Mini Sidebar -->
                        <div class="w-7 rounded bg-zinc-900 dark:bg-zinc-800 p-1 flex flex-col gap-1 shrink-0">
                            <div class="h-1.5 w-full bg-white/40 dark:bg-zinc-600 rounded"></div>
                            <div class="h-1 w-full bg-white/20 dark:bg-zinc-700 rounded"></div>
                            <div class="h-1 w-full bg-white/20 dark:bg-zinc-700 rounded"></div>
                            <div class="h-1 w-full bg-white/20 dark:bg-zinc-700 rounded"></div>
                        </div>
                        <!-- Mini Main -->
                        <div class="flex-1 flex flex-col justify-between gap-1.5">
                            <div class="h-3 rounded bg-zinc-200 dark:bg-zinc-800 w-full flex items-center px-1">
                                <div class="h-1 w-8 bg-zinc-400 dark:bg-zinc-600 rounded"></div>
                            </div>
                            <div class="flex-1 rounded bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center">
                                <span class="text-[9px] font-mono text-zinc-500 dark:text-zinc-400">Admin Console</span>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div>
                        <x-aura::heading level="3" size="xs">Admin Console</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1.5 leading-relaxed">
                            System administrator console layout featuring a dedicated sidebar navigation, metrics, and health logs.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="primary" size="md" class="w-full justify-between" href="/admin">
                        <span>Access Admin Console</span>
                        <span>&rarr;</span>
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

        </div>
    </section>

    <!-- 3. Footer -->
    <x-aura::footer class="mt-24 sm:mt-36">
        <x-slot name="brand">
            <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-md bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center text-xs font-bold shadow-2xs">A</div>
                <span class="font-bold text-zinc-900 dark:text-white text-sm">Aura Wire UI</span>
            </div>
        </x-slot>

        <a href="/components" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
        <a href="/components/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Installation</a>
        <a href="/components/icon" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Icons (1000+)</a>
        <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-900 dark:hover:text-white transition-colors flex items-center gap-1">
            <span>Packagist</span>
            <svg class="w-3 h-3 text-zinc-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
        </a>

        <x-slot name="bottom">
            <x-aura::text size="xs" variant="subtle">&copy; {{ date('Y') }} Aura Wire. Built with Laravel &amp; Livewire Volt.</x-aura::text>
            <x-aura::text size="xs" variant="subtle">Laravel v{{ app()->version() }}</x-aura::text>
        </x-slot>
    </x-aura::footer>

</div>
