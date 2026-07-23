<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Subheading Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Subheading Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::subheading&gt;</x-aura::code>
        </x-aura::text>
    </div>

    <x-aura::code title="Subheading Component">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::heading level="2">Dashboard Overview</x-aura::heading>
                <x-aura::subheading>Monitor your key metrics and active project statistics in real time.</x-aura::subheading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="2"&gt;Dashboard Overview&lt;/x-aura::heading&gt;
&lt;x-aura::subheading&gt;Monitor your key metrics and active project statistics in real time.&lt;/x-aura::subheading&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
