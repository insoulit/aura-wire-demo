<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Body - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Layout</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Body</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Root page body layout component managing theme background colors, font smoothing, and viewport height scaling.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::body&gt;
            </code>
        </div>
    </div>

    <x-aura::code class="w-full" title="Root Page Body Layout Component">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 text-center">
                <div class="text-xs font-mono text-zinc-500 dark:text-zinc-400">
                    &lt;x-aura::body&gt; ... &lt;/x-aura::body&gt;
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!DOCTYPE html&gt;
&lt;html lang="en" class="h-full antialiased"&gt;
&lt;x-layout::shared.head title="App" /&gt;
&lt;x-aura::body&gt;
    &lt;livewire:layout.shared.header /&gt;
    &lt;main&gt;
        {{ $slot }}
    &lt;/main&gt;
    &lt;livewire:layout.shared.footer /&gt;
&lt;/x-aura::body&gt;
&lt;/html&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
