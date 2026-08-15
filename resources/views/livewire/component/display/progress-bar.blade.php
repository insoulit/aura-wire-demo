<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Progress Bar - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Progress Bar</x-aura::heading>
            <x-aura::subheading size="md">
                Visual progress indicators for file uploads, storage quota limits, onboarding steps, and system metrics.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::progress-bar :value="75" variant="primary" size="md" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Color Variants -->
    <x-aura::code  title="1. Color & Intent Variants">
        <x-slot:preview>
            <div class="w-full max-w-lg space-y-6">
                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>Profile Completion (Default)</span>
                        <span class="font-mono">75%</span>
                    </div>
                    <x-aura::progress-bar percent="75" variant="default" size="md" />
                </div>

                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>Database Sync (Emerald / Success)</span>
                        <span class="font-mono text-emerald-600 dark:text-emerald-400">100%</span>
                    </div>
                    <x-aura::progress-bar percent="100" variant="emerald" size="md" />
                </div>

                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>Storage Warning (Amber)</span>
                        <span class="font-mono text-amber-600 dark:text-amber-400">85%</span>
                    </div>
                    <x-aura::progress-bar percent="85" variant="amber" size="md" />
                </div>

                <div>
                    <div class="flex justify-between text-xs font-semibold mb-1">
                        <span>CPU Quota Exceeded (Danger / Red)</span>
                        <span class="font-mono text-red-600 dark:text-red-400">96%</span>
                    </div>
                    <x-aura::progress-bar percent="96" variant="danger" size="md" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::progress-bar percent="75" variant="default" size="md" />
<x-aura::progress-bar percent="100" variant="emerald" size="md" />
<x-aura::progress-bar percent="85" variant="amber" size="md" />
<x-aura::progress-bar percent="96" variant="danger" size="md" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code  title="2. Progress Bar Sizes (sm, md, lg)">
        <x-slot:preview>
            <div class="w-full max-w-lg space-y-6">
                <div>
                    <span class="text-xs text-zinc-500 block mb-1">Small (sm)</span>
                    <x-aura::progress-bar percent="40" size="sm" />
                </div>

                <div>
                    <span class="text-xs text-zinc-500 block mb-1">Medium (md)</span>
                    <x-aura::progress-bar percent="65" size="md" />
                </div>

                <div>
                    <span class="text-xs text-zinc-500 block mb-1">Large (lg)</span>
                    <x-aura::progress-bar percent="85" size="lg" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::progress-bar percent="40" size="sm" />
<x-aura::progress-bar percent="65" size="md" />
<x-aura::progress-bar percent="85" size="lg" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
