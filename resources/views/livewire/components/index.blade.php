<?php

use function Livewire\Volt\layout;
use function Livewire\Volt\title;

layout('layouts.components');
title('Component Directory — Aura Wire');

?>

<div class="w-full space-y-12">
    <!-- Header Banner & Package Link -->
    <div class="space-y-6">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-6">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <x-aura::kicker class="text-indigo-600 dark:text-indigo-400">📦 insoulit/aura-wire Component Suite</x-aura::kicker>
                    <x-aura::badge variant="positive" size="sm">v1.0.0</x-aura::badge>
                </div>
                <x-aura::heading level="1" size="xl">Component Directory</x-aura::heading>
                <x-aura::subheading class="mt-1">
                    Browse through individual standalone documentation pages for every component registered by Aura Wire, organized by category.
                </x-aura::subheading>
            </div>
            
            <div class="flex items-center gap-3 shrink-0">
                <a href="/components/installation" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold text-white bg-indigo-600 hover:bg-indigo-500 shadow-md shadow-indigo-600/20 transition-all group">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    <span>Installation Guide</span>
                    <svg class="w-3.5 h-3.5 opacity-70 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        <!-- Quick Package Installation Card -->
        <div class="rounded-2xl bg-gradient-to-r from-zinc-900 via-indigo-950/80 to-zinc-900 p-6 text-white border border-indigo-500/30 shadow-xl space-y-5">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-3 border-b border-white/10 pb-4">
                <div>
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <x-aura::heading level="2" size="md" class="text-white">Package Installation & Setup</x-aura::heading>
                    </div>
                    <p class="text-xs text-zinc-300 mt-1">Install the Composer package into your Laravel application to use `<aura:...>` components.</p>
                </div>
                <div class="flex items-center gap-2 text-xs text-indigo-300 bg-indigo-500/10 px-3 py-1.5 rounded-lg border border-indigo-500/20">
                    <span class="inline-block w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Supports Laravel 11/12 & Livewire Volt</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Composer Install Step -->
                <div class="space-y-2 bg-black/40 p-4 rounded-xl border border-white/10">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-semibold text-indigo-400 uppercase tracking-wider">1. Install Package</span>
                        <span class="text-[10px] text-zinc-400">Composer</span>
                    </div>
                    <div class="flex items-center justify-between bg-zinc-950 px-3 py-2 rounded-lg border border-zinc-800 font-mono text-xs text-emerald-400">
                        <code>composer require insoulit/aura-wire</code>
                    </div>
                </div>

                <!-- Publish Assets Step -->
                <div class="space-y-2 bg-black/40 p-4 rounded-xl border border-white/10">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-semibold text-indigo-400 uppercase tracking-wider">2. Publish Config & Views</span>
                        <span class="text-[10px] text-zinc-400">Artisan</span>
                    </div>
                    <div class="flex items-center justify-between bg-zinc-950 px-3 py-2 rounded-lg border border-zinc-800 font-mono text-xs text-indigo-300">
                        <code>php artisan vendor:publish --tag="aura-wire-config"</code>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap items-center justify-between gap-3 text-xs text-zinc-400 pt-2 border-t border-white/5">
                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-1.5"><strong class="text-white">Package Link:</strong> <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" class="text-indigo-400 hover:underline">insoulit/aura-wire</a></span>
                    <span class="flex items-center gap-1.5"><strong class="text-white">Prefixes:</strong> <code class="text-zinc-300">&lt;aura:...&gt;</code> & <code class="text-zinc-300">&lt;x-aura::...&gt;</code></span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-xs text-zinc-400">License: <strong class="text-white">MIT</strong></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Category 1: Typography -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
            <x-aura::heading level="2" size="md">Typography</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">4 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="/components/heading" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Heading</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::heading&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/subheading" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Subheading</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::subheading&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/kicker" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Kicker</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::kicker&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/text" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Text</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::text&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>

    <!-- Category 2: Layout & Structural -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h3a1 1 0 011 1v6a1 1 0 01-1 1h-3a1 1 0 01-1-1v-6z"/></svg>
            <x-aura::heading level="2" size="md">Layout</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">5 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="/components/header" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Header</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::header&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/sidebar" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Sidebar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::sidebar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/main" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Main</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::main&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/navbar" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Navbar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::navbar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/footer" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Footer</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::footer&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>

    <!-- Category 3: Actions -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>
            <x-aura::heading level="2" size="md">Actions</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">3 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="/components/button" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Button</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/button-group" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Button Group</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button.group&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/dropdown" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Dropdown</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::dropdown&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>

    <!-- Category 4: Form Controls -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
            <x-aura::heading level="2" size="md">Form</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">10 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="/components/input" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Input</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::input&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/textarea" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Textarea</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::textarea&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/select" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Select</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::select&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/checkbox" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Checkbox</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::checkbox&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/radio" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Radio</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::radio&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/switch" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Switch</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::switch&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/field" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Field &amp; Label</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::field&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/file-upload" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">File Upload</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::file-upload&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/pin-code" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">PIN Code</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::pin-code&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/error" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Error</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::error&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>

    <!-- Category 5: Data Display -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            <x-aura::heading level="2" size="md">Display</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">11 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="/components/avatar" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Avatar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::avatar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/badge" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Badge</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::badge&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/card" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::card&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/code" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Code</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::code&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/empty-state" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Empty State</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::empty-state&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/numbered-list" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Numbered List</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::numbered-list&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/product-card" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Product Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::product-card&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/progress-bar" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Progress Bar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::progress-bar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/separator" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Separator</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::separator&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/table" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Table</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::table&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/tabs" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Tabs</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tabs&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>

    <!-- Category 6: Navigation -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            <x-aura::heading level="2" size="md">Navigation</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">2 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="/components/breadcrumbs" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Breadcrumbs</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::breadcrumbs&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/pagination" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Pagination</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::pagination&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>

    <!-- Category 7: Overlays & Feedback -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
            <x-aura::heading level="2" size="md">Overlays &amp; Feedback</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">6 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <a href="/components/banner" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Banner</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::banner&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/modal" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Modal</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::modal&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/sheet" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Sheet Drawer</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::sheet&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/spinner" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Spinner</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::spinner&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/tag" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Tag</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tag&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/toast" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Toast</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::toast&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>
</div>
