<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Installation & Setup Guide - Aura Wire');

?>

<div class="space-y-10 max-w-4xl">
    <!-- Header -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker class="text-zinc-500 mb-2">⚡ GETTING STARTED</x-aura::kicker>
                <x-aura::heading level="1" size="xl">Installation &amp; Setup Guide</x-aura::heading>
                <x-aura::subheading class="mt-2">
                    Install <code class="text-zinc-900 dark:text-white font-mono font-semibold">insoulit/aura-wire</code> via Composer into your Laravel application and publish assets.
                </x-aura::subheading>
            </div>

            <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold text-white bg-zinc-900 dark:bg-white dark:text-zinc-900 hover:bg-zinc-800 dark:hover:bg-zinc-100 shadow-md transition-all group">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                <span>Packagist Release</span>
            </a>
        </div>
    </div>

    <!-- Requirements Card -->
    <x-aura::card title="System Requirements">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="flex items-center gap-3">
                <x-aura::badge variant="neutral" size="sm">PHP 8.2+</x-aura::badge>
                <x-aura::text size="xs" variant="subtle">Modern PHP Runtime</x-aura::text>
            </div>
            <div class="flex items-center gap-3">
                <x-aura::badge variant="positive" size="sm">Laravel 11 / 12</x-aura::badge>
                <x-aura::text size="xs" variant="subtle">Framework Support</x-aura::text>
            </div>
            <div class="flex items-center gap-3">
                <x-aura::badge variant="subtle" size="sm">Tailwind CSS 3/4</x-aura::badge>
                <x-aura::text size="xs" variant="subtle">Utility Styling</x-aura::text>
            </div>
        </div>
    </x-aura::card>

    <!-- Installation Steps -->
    <div class="space-y-6">
        <!-- Step 1 -->
        <x-aura::card class="space-y-3">
            <div class="flex items-center gap-3">
                <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 font-bold text-xs">1</span>
                <x-aura::heading level="2" size="md">Require Package via Composer</x-aura::heading>
            </div>
            <x-aura::text size="sm" variant="subtle">Run the composer require command in your Laravel root directory:</x-aura::text>
            <div class="bg-zinc-950 p-4 rounded-xl border border-zinc-800 text-zinc-100 font-mono text-sm flex items-center justify-between shadow-inner">
                <span>composer require insoulit/aura-wire</span>
                <x-aura::badge variant="subtle" size="sm">Bash</x-aura::badge>
            </div>
        </x-aura::card>

        <!-- Step 2 -->
        <x-aura::card class="space-y-3">
            <div class="flex items-center gap-3">
                <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 font-bold text-xs">2</span>
                <x-aura::heading level="2" size="md">Publish Package Assets &amp; Config</x-aura::heading>
            </div>
            <x-aura::text size="sm" variant="subtle">Publish the configuration and Blade components using Artisan:</x-aura::text>
            <div class="bg-zinc-950 p-4 rounded-xl border border-zinc-800 text-zinc-100 font-mono text-sm flex items-center justify-between shadow-inner">
                <span>php artisan vendor:publish --tag="aura-wire-config"</span>
                <x-aura::badge variant="subtle" size="sm">Artisan</x-aura::badge>
            </div>
        </x-aura::card>

        <!-- Step 3 -->
        <x-aura::card class="space-y-3">
            <div class="flex items-center gap-3">
                <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 font-bold text-xs">3</span>
                <x-aura::heading level="2" size="md">Register Component Views in Tailwind</x-aura::heading>
            </div>
            <x-aura::text size="sm" variant="subtle">Ensure your <code class="text-zinc-900 dark:text-white font-mono font-semibold">tailwind.config.js</code> or CSS includes vendor components:</x-aura::text>
            <div class="bg-zinc-950 p-4 rounded-xl border border-zinc-800 text-zinc-200 font-mono text-xs overflow-x-auto">
                <pre>content: [
    './resources/**/*.blade.php',
    './vendor/insoulit/aura-wire/resources/views/**/*.blade.php',
],</pre>
            </div>
        </x-aura::card>

        <!-- Step 4 -->
        <x-aura::card class="space-y-3">
            <div class="flex items-center gap-3">
                <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 font-bold text-xs">4</span>
                <x-aura::heading level="2" size="md">Use Components with Shorthand Tag Syntax</x-aura::heading>
            </div>
            <x-aura::text size="sm" variant="subtle">You can now render components using either <code class="text-zinc-900 dark:text-white font-mono font-semibold">&lt;x-aura::button&gt;</code> or shorthand <code class="text-zinc-900 dark:text-white font-mono font-semibold">&lt;aura:button&gt;</code>:</x-aura::text>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
                <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-2">
                    <div class="text-xs font-semibold text-zinc-900 dark:text-white uppercase tracking-wider">Shorthand Tag Syntax</div>
                    <div class="bg-zinc-950 p-3 rounded-lg text-zinc-200 font-mono text-xs">&lt;aura:button variant="primary"&gt;Click&lt;/aura:button&gt;</div>
                </div>
                <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-2">
                    <div class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">Standard Blade Syntax</div>
                    <div class="bg-zinc-950 p-3 rounded-lg text-zinc-200 font-mono text-xs">&lt;x-aura::button variant="primary"&gt;Click&lt;/x-aura::button&gt;</div>
                </div>
            </div>
        </x-aura::card>
    </div>
</div>
