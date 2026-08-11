<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Body - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Body</x-aura::heading>
            <x-aura::subheading size="md">
                Root page body layout component managing theme background colors, font smoothing, and viewport height scaling.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::body&gt;Page content&lt;/x-aura::body&gt;</x-slot:codeSlot>
    </x-aura::code>

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
