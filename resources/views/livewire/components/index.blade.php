<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Component Directory — Aura Wire');

?>

<div class="w-full space-y-10">
    <!-- Header Banner -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::kicker class="text-indigo-600 dark:text-indigo-400 mb-2">📦 insoulit/aura-wire Component Suite</x-aura::kicker>
        <x-aura::heading level="1" size="xl">Component Directory</x-aura::heading>
        <x-aura::subheading class="mt-1">
            Browse through individual standalone documentation pages for every component registered by Aura Wire.
        </x-aura::subheading>
    </div>

    <!-- Component Cards Directory Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="/components/heading" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Heading</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::heading&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/subheading" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Subheading</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::subheading&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/kicker" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Kicker</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::kicker&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/text" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Text</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::text&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/code" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Code</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::code&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/header" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Header</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::header&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/sidebar" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Sidebar</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::sidebar&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/main" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Main</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::main&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/button" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Button</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/button-group" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Button Group</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button.group&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/input" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-violet-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Input</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::input&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>

        <a href="/components/textarea" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-violet-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <x-aura::heading level="3" size="sm">Textarea</x-aura::heading>
                <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::textarea&gt;</x-aura::text>
            </div>
            <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4">View Component &rarr;</x-aura::text>
        </a>
    </div>
</div>
