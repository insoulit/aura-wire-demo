<?php

use function Livewire\Volt\layout;
use function Livewire\Volt\title;

layout('layouts.components');
title('Installation & Setup — Aura Wire');

?>

<div class="w-full space-y-10">
    <!-- Header Banner -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <x-aura::kicker class="text-indigo-600 dark:text-indigo-400 mb-2">⚡ GETTING STARTED</x-aura::kicker>
            <x-aura::heading level="1" size="xl">Installation &amp; Setup</x-aura::heading>
            <x-aura::subheading class="mt-1">
                Install <code class="text-indigo-600 dark:text-indigo-400 font-mono">insoulit/aura-wire</code> via Composer into your Laravel application and publish assets.
            </x-aura::subheading>
        </div>

        <div class="flex items-center gap-3 shrink-0">
            <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-semibold text-white bg-indigo-600 hover:bg-indigo-500 shadow-md shadow-indigo-600/20 transition-all group">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                <span>View on Packagist</span>
                <svg class="w-3.5 h-3.5 opacity-70 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </div>

    <!-- Requirements Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
            <div class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">PHP Version</div>
            <div class="text-base font-semibold text-zinc-900 dark:text-white mt-1">PHP ^8.3</div>
        </div>
        <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
            <div class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">Framework</div>
            <div class="text-base font-semibold text-zinc-900 dark:text-white mt-1">Laravel ^11 / ^12</div>
        </div>
        <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
            <div class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">Reactivity</div>
            <div class="text-base font-semibold text-zinc-900 dark:text-white mt-1">Livewire ^3 / Volt</div>
        </div>
        <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
            <div class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">Styling</div>
            <div class="text-base font-semibold text-zinc-900 dark:text-white mt-1">Tailwind CSS</div>
        </div>
    </div>

    <!-- Step 1: Composer Require -->
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-indigo-600 text-white font-bold text-xs shadow-md shadow-indigo-600/20">1</span>
            <x-aura::heading level="2" size="md">Install Package via Composer</x-aura::heading>
        </div>
        <p class="text-sm text-zinc-600 dark:text-zinc-400">
            Run the Composer require command in your Laravel root directory to add the package dependency:
        </p>
        <div class="bg-zinc-950 p-4 rounded-xl border border-zinc-800 text-emerald-400 font-mono text-sm flex items-center justify-between shadow-inner">
            <code>composer require insoulit/aura-wire</code>
            <button onclick="navigator.clipboard.writeText('composer require insoulit/aura-wire')" class="text-xs text-zinc-400 hover:text-white px-2.5 py-1 rounded bg-zinc-800 hover:bg-zinc-700 transition-colors">
                Copy
            </button>
        </div>
    </section>

    <!-- Step 2: Publish Config & Views -->
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-indigo-600 text-white font-bold text-xs shadow-md shadow-indigo-600/20">2</span>
            <x-aura::heading level="2" size="md">Publish Configuration &amp; Assets</x-aura::heading>
        </div>
        <p class="text-sm text-zinc-600 dark:text-zinc-400">
            Publish the configuration file to customize component prefixes and design system theme tokens:
        </p>
        <div class="bg-zinc-950 p-4 rounded-xl border border-zinc-800 text-indigo-300 font-mono text-sm flex items-center justify-between shadow-inner">
            <code>php artisan vendor:publish --tag="aura-wire-config"</code>
            <button onclick="navigator.clipboard.writeText('php artisan vendor:publish --tag=\&quot;aura-wire-config\&quot;')" class="text-xs text-zinc-400 hover:text-white px-2.5 py-1 rounded bg-zinc-800 hover:bg-zinc-700 transition-colors">
                Copy
            </button>
        </div>

        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-3">
            Optionally, publish Blade views if you want full control over component markup:
        </p>
        <div class="bg-zinc-950 p-4 rounded-xl border border-zinc-800 text-zinc-300 font-mono text-sm flex items-center justify-between shadow-inner">
            <code>php artisan vendor:publish --tag="aura-wire-views"</code>
            <button onclick="navigator.clipboard.writeText('php artisan vendor:publish --tag=\&quot;aura-wire-views\&quot;')" class="text-xs text-zinc-400 hover:text-white px-2.5 py-1 rounded bg-zinc-800 hover:bg-zinc-700 transition-colors">
                Copy
            </button>
        </div>
    </section>

    <!-- Step 3: Configuration Options -->
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-indigo-600 text-white font-bold text-xs shadow-md shadow-indigo-600/20">3</span>
            <x-aura::heading level="2" size="md">Package Configuration</x-aura::heading>
        </div>
        <p class="text-sm text-zinc-600 dark:text-zinc-400">
            The published config file is stored at <code class="text-indigo-600 dark:text-indigo-400 font-mono">config/aura-wire.php</code>:
        </p>
        <div class="bg-zinc-950 p-5 rounded-xl border border-zinc-800 text-zinc-200 font-mono text-xs overflow-x-auto shadow-inner">
            <pre class="text-zinc-300"><code>&lt;?php

return [
    /*
    | Component Prefix: &lt;aura:button&gt; or &lt;x-aura::button&gt;
    */
    'prefix' => 'aura',

    /*
    | Theme & Styling Customization
    */
    'theme' => [
        'border_radius' => 'md', // 'none' | 'sm' | 'md' | 'lg' | 'full'
        'dark_mode' => 'class',  // 'class' | 'media'
        'accent_color' => 'indigo',
    ],
];</code></pre>
        </div>
    </section>

    <!-- Step 4: Component Usage Syntax -->
    <section class="space-y-4">
        <div class="flex items-center gap-3">
            <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-indigo-600 text-white font-bold text-xs shadow-md shadow-indigo-600/20">4</span>
            <x-aura::heading level="2" size="md">Component Syntax &amp; Usage</x-aura::heading>
        </div>
        <p class="text-sm text-zinc-600 dark:text-zinc-400">
            Aura Wire supports dual tag syntax. You can use shorthand tags or standard Laravel Blade namespace syntax:
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-2">
                <div class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 uppercase tracking-wider">Shorthand Tag Syntax</div>
                <div class="bg-zinc-950 p-3 rounded-lg text-emerald-400 font-mono text-xs">
                    <code>&lt;aura:button variant="primary"&gt;<br>&nbsp;&nbsp;Submit<br>&lt;/aura:button&gt;</code>
                </div>
            </div>

            <div class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-2">
                <div class="text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Standard Blade Syntax</div>
                <div class="bg-zinc-950 p-3 rounded-lg text-indigo-300 font-mono text-xs">
                    <code>&lt;x-aura::button variant="primary"&gt;<br>&nbsp;&nbsp;Submit<br>&lt;/x-aura::button&gt;</code>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Action Card -->
    <div class="p-6 rounded-2xl bg-gradient-to-r from-indigo-500/10 via-purple-500/10 to-pink-500/10 border border-indigo-500/20 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <x-aura::heading level="3" size="sm">Ready to explore components?</x-aura::heading>
            <x-aura::text variant="subtle" size="xs" class="mt-1">Browse through all 30+ Blade and Livewire components in the interactive directory.</x-aura::text>
        </div>
        <x-aura::button variant="primary" href="/components" class="shrink-0">
            Explore Directory &rarr;
        </x-aura::button>
    </div>
</div>
