<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Badge — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Badge</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::badge&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Badge Tag Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::badge variant="neutral">Neutral</x-aura::badge>
                <x-aura::badge variant="subtle">Subtle</x-aura::badge>
                <x-aura::badge variant="positive">Active</x-aura::badge>
                <x-aura::badge variant="warning">Warning</x-aura::badge>
                <x-aura::badge variant="negative">Danger</x-aura::badge>
                <x-aura::badge variant="info">Info</x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge variant="neutral"&gt;Neutral&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="warning"&gt;Warning&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="negative"&gt;Danger&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
