<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Skeleton - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Skeleton</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Animated pulsing skeleton placeholders for loading content lines, avatars, buttons, and cards.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::skeleton&gt;
            </code>
        </div>
    </div>

    <!-- 1. Text & Avatar Shimmers -->
    <x-aura::code class="w-full" title="1. Profile Header Loading State">
        <x-slot:preview>
            <div class="flex items-center gap-4 w-full max-w-md p-4 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800">
                <x-aura::skeleton variant="avatar" />
                <div class="space-y-2 flex-1">
                    <x-aura::skeleton variant="text" width="60%" />
                    <x-aura::skeleton variant="text" width="40%" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::skeleton variant="avatar" /&gt;
&lt;x-aura::skeleton variant="text" width="60%" /&gt;
&lt;x-aura::skeleton variant="text" width="40%" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Card Skeleton -->
    <x-aura::code class="w-full" title="2. Content Card Skeleton Loader">
        <x-slot:preview>
            <div class="w-full max-w-md p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 space-y-4">
                <x-aura::skeleton variant="card" />
                <x-aura::skeleton variant="text" width="80%" />
                <x-aura::skeleton variant="button" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::skeleton variant="card" /&gt;
&lt;x-aura::skeleton variant="text" width="80%" /&gt;
&lt;x-aura::skeleton variant="button" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
