<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Card Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Card Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::card&gt;</code></p>
    </div>
    <x-aura::code title="Container Card">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::card title="Project Statistics" description="Monthly traffic overview">
                    <p class="text-sm text-zinc-600 dark:text-zinc-300">Total Visitors: 45,210</p>
                    <x-slot:footer>
                        <x-aura::button variant="primary" size="sm">Export Report</x-aura::button>
                    </x-slot:footer>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::card title="Project Statistics" description="Monthly traffic overview"&gt;
    &lt;p&gt;Total Visitors: 45,210&lt;/p&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Export Report&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::card&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
