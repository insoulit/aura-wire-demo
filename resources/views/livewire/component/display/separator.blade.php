<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Separator - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Separator</x-aura::heading>
            <x-aura::subheading size="md">
                Horizontal and vertical dividers for visually separating section content and UI groups.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::separator label="OR" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- Divider Showcase -->
    <x-aura::code class="w-full" title="Divider Separator">
            <x-slot:preview>
                <div class="w-full max-w-lg space-y-4 py-2">
                    <x-aura::text size="sm" class="text-zinc-500">Top Content Section</x-aura::text>
                    <x-aura::separator label="OR" />
                    <x-aura::text size="sm" class="text-zinc-500">Bottom Content Section</x-aura::text>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::text size="sm"&gt;Top Content Section&lt;/x-aura::text&gt;
&lt;x-aura::separator label="OR" /&gt;
&lt;x-aura::text size="sm"&gt;Bottom Content Section&lt;/x-aura::text&gt;</x-slot:codeSlot>
        </x-aura::code>
    

    <!-- Plain Line Separator -->
    <x-aura::code class="w-full" title="Plain Separator">
            <x-slot:preview>
                <div class="w-full max-w-lg space-y-4 py-2">
                    <x-aura::text size="sm" class="text-zinc-500">Section A</x-aura::text>
                    <x-aura::separator />
                    <x-aura::text size="sm" class="text-zinc-500">Section B</x-aura::text>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::text size="sm"&gt;Section A&lt;/x-aura::text&gt;
&lt;x-aura::separator /&gt;
&lt;x-aura::text size="sm"&gt;Section B&lt;/x-aura::text&gt;</x-slot:codeSlot>
        </x-aura::code>
    
</div>
