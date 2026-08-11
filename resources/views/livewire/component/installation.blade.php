<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Installation & Setup Guide - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Getting Started</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Installation &amp; Setup Guide</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Install <code class="text-zinc-900 dark:text-white font-mono font-semibold">insoulit/aura-wire</code> via Composer into your Laravel application and configure Plus Jakarta Sans typography.
        </x-aura::subheading>
        <div class="pt-2 flex items-center gap-3">
            <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-xl text-xs font-semibold text-white bg-zinc-900 dark:bg-white dark:text-zinc-900 hover:bg-zinc-800 dark:hover:bg-zinc-100 shadow-2xs transition-all group shrink-0">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                <span>Packagist v1.4.0</span>
            </a>
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-xs font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                composer require insoulit/aura-wire
            </code>
        </div>
    </div>

    <!-- Requirements Card -->
    <x-aura::card title="System Requirements" class="w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
            {{-- PHP --}}
            <div class="flex items-center justify-between p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">PHP</div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold text-zinc-900 dark:text-white truncate">PHP Runtime</div>
                        <div class="text-[11px] text-zinc-500 dark:text-zinc-400 truncate">Version 8.2 or higher</div>
                    </div>
                </div>
                <x-aura::badge variant="neutral" size="sm" class="shrink-0 ml-2">v8.2+</x-aura::badge>
            </div>

            {{-- Laravel --}}
            <div class="flex items-center justify-between p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">LV</div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold text-zinc-900 dark:text-white truncate">Laravel Framework</div>
                        <div class="text-[11px] text-zinc-500 dark:text-zinc-400 truncate">Version 11.x or 12.x</div>
                    </div>
                </div>
                <x-aura::badge variant="positive" size="sm" class="shrink-0 ml-2">v11 / v12</x-aura::badge>
            </div>

            {{-- Livewire --}}
            <div class="flex items-center justify-between p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">LW</div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold text-zinc-900 dark:text-white truncate">Livewire Core</div>
                        <div class="text-[11px] text-zinc-500 dark:text-zinc-400 truncate">Version 3.0 or higher</div>
                    </div>
                </div>
                <x-aura::badge variant="primary" size="sm" class="shrink-0 ml-2">v3.0+</x-aura::badge>
            </div>

            {{-- Tailwind CSS --}}
            <div class="flex items-center justify-between p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">
                <div class="flex items-center gap-3 min-w-0">
                    <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">TW</div>
                    <div class="min-w-0">
                        <div class="text-xs font-bold text-zinc-900 dark:text-white truncate">Tailwind CSS</div>
                        <div class="text-[11px] text-zinc-500 dark:text-zinc-400 truncate">Version 3.x or 4.x</div>
                    </div>
                </div>
                <x-aura::badge variant="subtle" size="sm" class="shrink-0 ml-2">v3 / v4</x-aura::badge>
            </div>
        </div>
    </x-aura::card>

    <!-- Installation Steps -->
    <div class="w-full space-y-6">
        <!-- Step 1 -->
        <x-aura::card class="space-y-4">
            <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">1</span>
                    <x-aura::heading level="2" size="md">Require Package via Composer</x-aura::heading>
                </div>
                <x-aura::badge variant="subtle" size="sm">Terminal</x-aura::badge>
            </div>
            <x-aura::text size="sm" variant="subtle" class="py-3 block">Run the composer require command in your Laravel root directory:</x-aura::text>
            <x-aura::code class="w-full" language="bash" active="code" :showTabs="false">
                <x-slot:codeSlot>composer require insoulit/aura-wire</x-slot:codeSlot>
            </x-aura::code>
        </x-aura::card>

        <!-- Step 2 -->
        <x-aura::card class="space-y-4">
            <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">2</span>
                    <x-aura::heading level="2" size="md">Publish Package Assets &amp; Config</x-aura::heading>
                </div>
                <x-aura::badge variant="subtle" size="sm">Artisan</x-aura::badge>
            </div>
            <x-aura::text size="sm" variant="subtle" class="py-3 block">Publish the configuration and Blade components using Artisan:</x-aura::text>
            <x-aura::code class="w-full" language="bash" active="code" :showTabs="false">
                <x-slot:codeSlot>php artisan vendor:publish --tag="aura-wire-config"</x-slot:codeSlot>
            </x-aura::code>
        </x-aura::card>

        <!-- Step 3 -->
        <x-aura::card class="space-y-4">
            <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">3</span>
                    <x-aura::heading level="2" size="md">Register Component Views in Tailwind</x-aura::heading>
                </div>
                <x-aura::badge variant="subtle" size="sm">Tailwind CSS</x-aura::badge>
            </div>
            <x-aura::text size="sm" variant="subtle" class="py-3 block">Ensure your <code class="text-zinc-900 dark:text-white font-mono font-semibold">tailwind.config.js</code> or CSS includes vendor component views:</x-aura::text>
            <x-aura::code class="w-full" language="javascript" active="code" :showTabs="false">
                <x-slot:codeSlot>content: [
    './resources/**/*.blade.php',
    './vendor/insoulit/aura-wire/resources/views/**/*.blade.php',
],</x-slot:codeSlot>
            </x-aura::code>
        </x-aura::card>

        <!-- Step 4: Plus Jakarta Sans Font Integration (Recommended) -->
        <x-aura::card class="space-y-4">
            <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">4</span>
                    <x-aura::heading level="2" size="md">Plus Jakarta Sans Font Integration (Recommended)</x-aura::heading>
                </div>
                <x-aura::badge variant="primary" size="sm">Typography Guideline</x-aura::badge>
            </div>

            <x-aura::text size="sm" variant="subtle" class="py-3 block">
                AuraWire is designed to look crisp and state-of-the-art using modern typography like <strong>Plus Jakarta Sans</strong>. Import the font in your layout head and configure Tailwind CSS:
            </x-aura::text>

            <div class="space-y-2">
                <div class="text-xs font-bold uppercase tracking-wider text-zinc-900 dark:text-white">A. Include Plus Jakarta Sans via Google Fonts (&lt;head&gt;)</div>
                <x-aura::code class="w-full" language="html" active="code" :showTabs="false">
                    <x-slot:codeSlot>&lt;link rel="preconnect" href="https://fonts.googleapis.com"&gt;
&lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin&gt;
&lt;link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,400..800;1,400..800&amp;family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet"&gt;</x-slot:codeSlot>
                </x-aura::code>
            </div>

            <div class="space-y-3 pt-2">
                <div class="text-xs font-bold uppercase tracking-wider text-zinc-900 dark:text-white">B. Configure Font Family in Tailwind CSS</div>
                <div class="space-y-4">
                    <div class="space-y-1.5">
                        <span class="text-xs font-semibold text-zinc-600 dark:text-zinc-400">Tailwind CSS v4 (<code class="font-mono text-indigo-500">resources/css/app.css</code>)</span>
                        <x-aura::code class="w-full" language="css" active="code" :showTabs="false">
                            <x-slot:codeSlot>@theme {
  --font-sans: 'Plus Jakarta Sans', sans-serif;
  --font-mono: 'JetBrains Mono', monospace;
}</x-slot:codeSlot>
                        </x-aura::code>
                    </div>
                    <div class="space-y-1.5">
                        <span class="text-xs font-semibold text-zinc-600 dark:text-zinc-400">Tailwind CSS v3 (<code class="font-mono text-indigo-500">tailwind.config.js</code>)</span>
                        <x-aura::code class="w-full" language="javascript" active="code" :showTabs="false">
                            <x-slot:codeSlot>module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: ['Plus Jakarta Sans', 'sans-serif'],
        mono: ['JetBrains Mono', 'monospace'],
      },
    },
  },
}</x-slot:codeSlot>
                        </x-aura::code>
                    </div>
                </div>
            </div>
        </x-aura::card>

        <!-- Step 5 -->
        <x-aura::card class="space-y-4">
            <div class="flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">5</span>
                    <x-aura::heading level="2" size="md">Use Components with Tag Syntax</x-aura::heading>
                </div>
                <x-aura::badge variant="subtle" size="sm">Usage</x-aura::badge>
            </div>
            <x-aura::text size="sm" variant="subtle" class="py-3 block">Render components using either shorthand <code class="text-zinc-900 dark:text-white font-mono font-semibold">&lt;aura:...&gt;</code> or standard Blade prefix syntax <code class="text-zinc-900 dark:text-white font-mono font-semibold">&lt;x-aura::...&gt;</code>:</x-aura::text>
            <div class="space-y-4 pt-1">
                <div class="space-y-1.5">
                    <div class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 uppercase tracking-wider">Shorthand Tag Syntax (Recommended)</div>
                    <x-aura::code class="w-full" language="html" active="code" :showTabs="false">
                        <x-slot:codeSlot>&lt;aura:button variant="primary"&gt;Save Changes&lt;/aura:button&gt;</x-slot:codeSlot>
                    </x-aura::code>
                </div>
                <div class="space-y-1.5">
                    <div class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 uppercase tracking-wider">Standard Blade Prefix Syntax</div>
                    <x-aura::code class="w-full" language="html" active="code" :showTabs="false">
                        <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Save Changes&lt;/x-aura::button&gt;</x-slot:codeSlot>
                    </x-aura::code>
                </div>
            </div>
        </x-aura::card>
    </div>
</div>
