<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Heading Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Heading Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::heading&gt;</x-aura::code>
        </x-aura::text>
    </div>

    <!-- Levels & Sizes -->
    <section class="space-y-4">
        <x-aura::heading level="2" size="lg">Heading Levels &amp; Display Sizes</x-aura::heading>
        <x-aura::code title="Heading Levels">
            <x-slot:preview>
                <div class="space-y-4 w-full">
                    <x-aura::heading level="1" size="display-lg">Display Large Heading</x-aura::heading>
                    <x-aura::heading level="1" size="xl">Level 1 (XL) Heading</x-aura::heading>
                    <x-aura::heading level="2" size="lg">Level 2 (LG) Heading</x-aura::heading>
                    <x-aura::heading level="3" size="md">Level 3 (MD) Heading</x-aura::heading>
                    <x-aura::heading level="4" size="sm">Level 4 (SM) Heading</x-aura::heading>
                    <x-aura::heading level="5" size="xs">Level 5 (XS) Heading</x-aura::heading>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::heading level="1" size="display-lg"&gt;Display Large Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="1" size="xl"&gt;Level 1 Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="2" size="lg"&gt;Level 2 Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="3" size="md"&gt;Level 3 Heading&lt;/x-aura::heading&gt;</x-slot:codeSlot>
        </x-aura::code>
    </section>
</div>
