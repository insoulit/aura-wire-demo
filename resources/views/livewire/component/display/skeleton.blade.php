<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Skeleton - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Skeleton</x-aura::heading>
            <x-aura::subheading size="md">
                Animated pulsing skeleton placeholders for loading content lines, avatars, buttons, and cards.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::skeleton variant="text" class="w-48 h-4" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Text & Avatar Shimmers -->
    <x-aura::code class="w-full" title="1. Profile Header Loading State">
        <x-slot:preview>
            <x-aura::card class="flex items-center gap-4 w-full max-w-md p-4">
                <x-aura::skeleton variant="avatar" />
                <div class="space-y-2 flex-1">
                    <x-aura::skeleton variant="text" width="60%" />
                    <x-aura::skeleton variant="text" width="40%" />
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::skeleton variant="avatar" /&gt;
&lt;x-aura::skeleton variant="text" width="60%" /&gt;
&lt;x-aura::skeleton variant="text" width="40%" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Card Skeleton -->
    <x-aura::code class="w-full" title="2. Content Card Skeleton Loader">
        <x-slot:preview>
            <x-aura::card class="w-full max-w-md p-5 space-y-4">
                <x-aura::skeleton variant="card" />
                <x-aura::skeleton variant="text" width="80%" />
                <x-aura::skeleton variant="button" />
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::skeleton variant="card" /&gt;
&lt;x-aura::skeleton variant="text" width="80%" /&gt;
&lt;x-aura::skeleton variant="button" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
