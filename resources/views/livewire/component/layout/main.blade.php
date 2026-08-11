<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Main - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Layout</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Main</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Main container layout area enforcing consistent padding, max-width boundary, and configurable X and Y axis alignment options (defaults to centered).
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::main alignX="center" alignY="center"&gt;
            </code>
        </div>
    </div>

    <!-- 1. Default Centered Alignment -->
    <x-aura::code class="w-full" title="1. Default Centered Alignment (alignX='center' alignY='center')">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 h-48 flex">
                <x-aura::main alignX="center" alignY="center">
                    <x-aura::text size="sm" class="font-bold">Centered Content (X &amp; Y)</x-aura::text>
                </x-aura::main>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::main alignX="center" alignY="center"&gt;
    &lt;x-aura::text size="sm"&gt;Centered content...&lt;/x-aura::text&gt;
&lt;/x-aura::main&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Alignment Options -->
    <x-aura::code class="w-full" title="2. Custom X and Y Alignments (start, center, end)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 h-36 flex">
                    <x-aura::main alignX="start" alignY="start" :container="false" class="h-full">
                        <x-aura::badge variant="neutral">alignX="start" alignY="start"</x-aura::badge>
                    </x-aura::main>
                </div>
                <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 h-36 flex">
                    <x-aura::main alignX="end" alignY="end" :container="false" class="h-full">
                        <x-aura::badge variant="primary">alignX="end" alignY="end"</x-aura::badge>
                    </x-aura::main>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Top Left Alignment --&gt;
&lt;x-aura::main alignX="start" alignY="start"&gt; ... &lt;/x-aura::main&gt;

&lt;!-- Bottom Right Alignment --&gt;
&lt;x-aura::main alignX="end" alignY="end"&gt; ... &lt;/x-aura::main&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
