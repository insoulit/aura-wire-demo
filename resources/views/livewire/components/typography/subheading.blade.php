<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Subheading - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Subheading</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::heading&gt;</code>
    </div>

    <x-aura::code class="w-full" title="Subheading Component">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::heading level="2">Dashboard Overview</x-aura::heading>
                <x-aura::subheading>Monitor your key metrics and active project statistics in real time.</x-aura::subheading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="2"&gt;Dashboard Overview&lt;/x-aura::heading&gt;
&lt;x-aura::subheading&gt;Monitor your key metrics and active project statistics in real time.&lt;/x-aura::subheading&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
