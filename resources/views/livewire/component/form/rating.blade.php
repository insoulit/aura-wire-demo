<?php

use function Livewire\Volt\{layout, title};

layout('layout.component');
title('Rating - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Rating</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Monochrome star rating form controls and read-only star rating indicators with precise half-star support.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::rating&gt;
            </code>
        </div>
    </div>

    <!-- 1. Interactive Rating -->
    <x-aura::code class="w-full" title="1. Interactive Form Control">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::label>Leave Your Rating</x-aura::label>
                <x-aura::rating rating="4" max="5" name="user_feedback" size="lg" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::rating rating="4" max="5" name="user_feedback" size="lg" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Half-Star Read-Only Score -->
    <x-aura::code class="w-full" title="2. Precise Fractional Half-Star Rating (4.5 / 5.0)">
        <x-slot:preview>
            <div class="flex items-center gap-3">
                <span class="text-2xl font-bold text-zinc-900 dark:text-white">4.5</span>
                <x-aura::rating rating="4.5" max="5" readonly size="lg" />
                <span class="text-xs text-zinc-500 font-medium">(1,280 verified customer reviews)</span>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;span class="text-2xl font-bold"&gt;4.5&lt;/span&gt;
&lt;x-aura::rating rating="4.5" max="5" readonly size="lg" /&gt;
&lt;span class="text-xs text-zinc-500"&gt;(1,280 reviews)&lt;/span&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Size Variations -->
    <x-aura::code class="w-full" title="3. Size Variations (sm, md, lg, xl)">
        <x-slot:preview>
            <div class="flex flex-col gap-3 items-start">
                <div class="flex items-center gap-3">
                    <span class="w-12 text-xs font-mono text-zinc-400">sm:</span>
                    <x-aura::rating rating="4.5" size="sm" readonly />
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-12 text-xs font-mono text-zinc-400">md:</span>
                    <x-aura::rating rating="4.5" size="md" readonly />
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-12 text-xs font-mono text-zinc-400">lg:</span>
                    <x-aura::rating rating="4.5" size="lg" readonly />
                </div>
                <div class="flex items-center gap-3">
                    <span class="w-12 text-xs font-mono text-zinc-400">xl:</span>
                    <x-aura::rating rating="4.5" size="xl" readonly />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::rating rating="4.5" size="sm" readonly /&gt;
&lt;x-aura::rating rating="4.5" size="md" readonly /&gt;
&lt;x-aura::rating rating="4.5" size="lg" readonly /&gt;
&lt;x-aura::rating rating="4.5" size="xl" readonly /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. 10-Point Scale Rating -->
    <x-aura::code class="w-full" title="4. 10-Point Scale Rating">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::label>NPS Recommendation Score (10 Stars)</x-aura::label>
                <x-aura::rating rating="8.5" max="10" name="nps_score" size="md" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::rating rating="8.5" max="10" name="nps_score" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
