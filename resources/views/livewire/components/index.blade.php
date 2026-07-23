<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Component Showcase — Aura Wire');

?>

<div class="w-full space-y-10">
    <!-- Header Banner -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 text-xs font-semibold uppercase tracking-wider mb-2">
                📦 insoulit/aura-wire
            </div>
            <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Package Component Showcase</h1>
            <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
                Explore all interactive Blade & Livewire components registered by the Aura Wire package.
            </p>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="secondary" size="sm" href="/">
                &larr; Back to Home
            </x-aura::button>
            <x-aura::button variant="primary" size="sm" href="https://github.com/insoulit/aura-wire" target="_blank">
                GitHub Repository
            </x-aura::button>
        </div>
    </div>

    <!-- Component Category 1: Button Variants -->
    <section id="buttons" class="space-y-4 scroll-mt-24">
        <div class="border-b border-zinc-200 dark:border-zinc-800/80 pb-3 flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold text-zinc-900 dark:text-white">1. Button Variants</h2>
                <p class="text-xs text-zinc-500 dark:text-zinc-400">Available styles using <code class="text-indigo-600 dark:text-indigo-400 font-mono">variant="..."</code> prop</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-4 shadow-sm">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Primary</span>
                <x-aura::button variant="primary">Primary Action</x-aura::button>
                <pre class="text-[11px] font-mono p-2.5 rounded-lg bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="primary"&gt;Primary Action&lt;/x-aura::button&gt;</code></pre>
            </div>

            <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-4 shadow-sm">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Secondary</span>
                <x-aura::button variant="secondary">Secondary Action</x-aura::button>
                <pre class="text-[11px] font-mono p-2.5 rounded-lg bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="secondary"&gt;Secondary Action&lt;/x-aura::button&gt;</code></pre>
            </div>

            <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-4 shadow-sm">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Subtle / Filled</span>
                <x-aura::button variant="subtle">Subtle Action</x-aura::button>
                <pre class="text-[11px] font-mono p-2.5 rounded-lg bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="subtle"&gt;Subtle Action&lt;/x-aura::button&gt;</code></pre>
            </div>

            <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-4 shadow-sm">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Outline</span>
                <x-aura::button variant="outline">Outline Action</x-aura::button>
                <pre class="text-[11px] font-mono p-2.5 rounded-lg bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="outline"&gt;Outline Action&lt;/x-aura::button&gt;</code></pre>
            </div>

            <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-4 shadow-sm">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Ghost</span>
                <x-aura::button variant="ghost">Ghost Action</x-aura::button>
                <pre class="text-[11px] font-mono p-2.5 rounded-lg bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="ghost"&gt;Ghost Action&lt;/x-aura::button&gt;</code></pre>
            </div>

            <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-4 shadow-sm">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Danger</span>
                <x-aura::button variant="danger">Delete Item</x-aura::button>
                <pre class="text-[11px] font-mono p-2.5 rounded-lg bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="danger"&gt;Delete Item&lt;/x-aura::button&gt;</code></pre>
            </div>

            <div class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-4 shadow-sm">
                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Link Button</span>
                <x-aura::button variant="link" href="#">Learn More &rarr;</x-aura::button>
                <pre class="text-[11px] font-mono p-2.5 rounded-lg bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="link" href="#"&gt;Learn More &amp;rarr;&lt;/x-aura::button&gt;</code></pre>
            </div>
        </div>
    </section>

    <!-- Component Category 2: Sizes -->
    <section id="sizes" class="space-y-4 scroll-mt-24">
        <div class="border-b border-zinc-200 dark:border-zinc-800/80 pb-3">
            <h2 class="text-xl font-bold text-zinc-900 dark:text-white">2. Button Sizes</h2>
            <p class="text-xs text-zinc-500 dark:text-zinc-400">Scale options: <code class="text-indigo-600 dark:text-indigo-400 font-mono">xs</code>, <code class="text-indigo-600 dark:text-indigo-400 font-mono">sm</code>, <code class="text-indigo-600 dark:text-indigo-400 font-mono">md</code>, <code class="text-indigo-600 dark:text-indigo-400 font-mono">lg</code></p>
        </div>

        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::button variant="primary" size="xs">Extra Small (xs)</x-aura::button>
                <x-aura::button variant="primary" size="sm">Small (sm)</x-aura::button>
                <x-aura::button variant="primary" size="md">Medium (md)</x-aura::button>
                <x-aura::button variant="primary" size="lg">Large (lg)</x-aura::button>
            </div>

            <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="primary" size="xs"&gt;Extra Small (xs)&lt;/x-aura::button&gt;
&lt;x-aura::button variant="primary" size="sm"&gt;Small (sm)&lt;/x-aura::button&gt;
&lt;x-aura::button variant="primary" size="md"&gt;Medium (md)&lt;/x-aura::button&gt;
&lt;x-aura::button variant="primary" size="lg"&gt;Large (lg)&lt;/x-aura::button&gt;</code></pre>
        </div>
    </section>

    <!-- Component Category 3: Icons & Square Aspect -->
    <section id="icons" class="space-y-4 scroll-mt-24">
        <div class="border-b border-zinc-200 dark:border-zinc-800/80 pb-3">
            <h2 class="text-xl font-bold text-zinc-900 dark:text-white">3. Icon Slots & Square Buttons</h2>
            <p class="text-xs text-zinc-500 dark:text-zinc-400">Leading and trailing SVG slots + square icon-only buttons</p>
        </div>

        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
            <div class="flex flex-wrap items-center gap-4">
                <!-- Leading Icon -->
                <x-aura::button variant="primary">
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </x-slot:icon>
                    Create New
                </x-aura::button>

                <!-- Trailing Icon -->
                <x-aura::button variant="secondary">
                    Next Step
                    <x-slot:iconTrailing>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </x-slot:iconTrailing>
                </x-aura::button>

                <!-- Square Buttons -->
                <x-aura::button variant="outline" size="sm" square>
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    </x-slot:icon>
                </x-aura::button>

                <x-aura::button variant="danger" size="sm" square>
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </x-slot:icon>
                </x-aura::button>
            </div>

            <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="primary"&gt;
    &lt;x-slot:icon&gt; &lt;svg ... /&gt; &lt;/x-slot:icon&gt;
    Create New
&lt;/x-aura::button&gt;

&lt;x-aura::button variant="outline" size="sm" square&gt;
    &lt;x-slot:icon&gt; &lt;svg ... /&gt; &lt;/x-slot:icon&gt;
&lt;/x-aura::button&gt;</code></pre>
        </div>
    </section>

    <!-- Component Category 4: States & Loading -->
    <section id="states" class="space-y-4 scroll-mt-24">
        <div class="border-b border-zinc-200 dark:border-zinc-800/80 pb-3">
            <h2 class="text-xl font-bold text-zinc-900 dark:text-white">4. States & Loading Indicators</h2>
            <p class="text-xs text-zinc-500 dark:text-zinc-400">Disabled states and Livewire automatic loading spinner targets</p>
        </div>

        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::button variant="primary" disabled>Disabled Primary</x-aura::button>
                <x-aura::button variant="secondary" disabled>Disabled Secondary</x-aura::button>
                <x-aura::button variant="primary" :loading="true">Processing...</x-aura::button>
                <x-aura::button variant="danger" :loading="true">Deleting...</x-aura::button>
            </div>

            <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button variant="primary" disabled&gt;Disabled Primary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="primary" :loading="true"&gt;Processing...&lt;/x-aura::button&gt;
&lt;x-aura::button variant="primary" wire:click="save"&gt;Save Changes&lt;/x-aura::button&gt;</code></pre>
        </div>
    </section>

    <!-- Component Category 5: Button Groups -->
    <section id="groups" class="space-y-4 scroll-mt-24">
        <div class="border-b border-zinc-200 dark:border-zinc-800/80 pb-3">
            <h2 class="text-xl font-bold text-zinc-900 dark:text-white">5. Button Groups</h2>
            <p class="text-xs text-zinc-500 dark:text-zinc-400">Connected button layout groups using <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::button.group&gt;</code></p>
        </div>

        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
            <div class="flex flex-wrap items-center gap-8">
                <!-- Horizontal -->
                <div class="space-y-2">
                    <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Horizontal Group</span>
                    <x-aura::button.group>
                        <x-aura::button variant="secondary" size="md">Years</x-aura::button>
                        <x-aura::button variant="secondary" size="md">Months</x-aura::button>
                        <x-aura::button variant="secondary" size="md">Days</x-aura::button>
                    </x-aura::button.group>
                </div>

                <!-- Vertical -->
                <div class="space-y-2">
                    <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block">Vertical Group</span>
                    <x-aura::button.group vertical>
                        <x-aura::button variant="outline" size="sm">Option A</x-aura::button>
                        <x-aura::button variant="outline" size="sm">Option B</x-aura::button>
                        <x-aura::button variant="outline" size="sm">Option C</x-aura::button>
                    </x-aura::button.group>
                </div>
            </div>

            <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button.group&gt;
    &lt;x-aura::button variant="secondary"&gt;Years&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary"&gt;Months&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary"&gt;Days&lt;/x-aura::button&gt;
&lt;/x-aura::button.group&gt;

&lt;x-aura::button.group vertical&gt;
    &lt;x-aura::button variant="outline"&gt;Option A&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="outline"&gt;Option B&lt;/x-aura::button&gt;
&lt;/x-aura::button.group&gt;</code></pre>
        </div>
    </section>

</div>
