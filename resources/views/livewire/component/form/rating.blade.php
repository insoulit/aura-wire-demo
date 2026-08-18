<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Rating - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Rating</x-aura::heading>
            <x-aura::subheading size="md">
                Monochrome star rating form controls and read only star rating indicators with precise half star support.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::rating wire:model="score" :max="5" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Interactive Rating -->
    <x-aura::code  title="1. Interactive Form Control">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::label>Leave Your Rating</x-aura::label>
                <x-aura::rating rating="4" max="5" name="user_feedback" size="lg" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::rating rating="4" max="5" name="user_feedback" size="lg" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Half Star Read-Only Score -->
    <x-aura::code  title="2. Precise Fractional Half Star Rating (4.5 / 5.0)">
        <x-slot:preview>
            <div class="flex items-center gap-3">
                <span class="text-2xl font-bold text-zinc-900 dark:text-white">4.5</span>
                <x-aura::rating rating="4.5" max="5" readonly size="lg" />
                <span class="text-xs text-zinc-500 font-medium">(1,280 verified customer reviews)</span>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<span class="text-2xl font-bold">4.5</span>
<x-aura::rating rating="4.5" max="5" readonly size="lg" />
<span class="text-xs text-zinc-500">(1,280 reviews)</span>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Size Variations -->
    <x-aura::code  title="3. Size Variations (sm, md, lg, xl)">
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
        <x-slot:codeSlot>@verbatim<x-aura::rating rating="4.5" size="sm" readonly />
<x-aura::rating rating="4.5" size="md" readonly />
<x-aura::rating rating="4.5" size="lg" readonly />
<x-aura::rating rating="4.5" size="xl" readonly />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. 10 Point Scale Rating -->
    <x-aura::code  title="4. 10 Point Scale Rating">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::label>NPS Recommendation Score (10 Stars)</x-aura::label>
                <x-aura::rating rating="8.5" max="10" name="nps_score" size="md" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::rating rating="8.5" max="10" name="nps_score" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
