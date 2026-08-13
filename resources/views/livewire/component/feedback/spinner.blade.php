<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Spinner - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Feedback</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Spinner</x-aura::heading>
            <x-aura::subheading size="md">
                Animated loading indicators supporting circular rings, bouncing dots, pulsating bars, and radar pings.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::spinner variant="ring" size="md" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Spinner Types (Ring, Dots, Bars, Ping) -->
    <x-aura::code  title="1. Spinner Types (Ring, Dots, Bars, Ping)">
        <x-slot:preview>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 w-full text-center">
                <div class="p-5 rounded-2xl bg-zinc-50 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex flex-col items-center gap-3">
                    <x-aura::spinner type="ring" size="lg" variant="primary" />
                    <span class="text-xs font-bold text-zinc-600 dark:text-zinc-400">Ring (Default)</span>
                </div>

                <div class="p-5 rounded-2xl bg-zinc-50 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex flex-col items-center gap-3">
                    <x-aura::spinner type="dots" size="lg" variant="primary" />
                    <span class="text-xs font-bold text-zinc-600 dark:text-zinc-400">Bouncing Dots</span>
                </div>

                <div class="p-5 rounded-2xl bg-zinc-50 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex flex-col items-center gap-3">
                    <x-aura::spinner type="bars" size="lg" variant="primary" />
                    <span class="text-xs font-bold text-zinc-600 dark:text-zinc-400">Equalizer Bars</span>
                </div>

                <div class="p-5 rounded-2xl bg-zinc-50 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex flex-col items-center gap-3">
                    <x-aura::spinner type="ping" size="lg" variant="primary" />
                    <span class="text-xs font-bold text-zinc-600 dark:text-zinc-400">Radar Ping</span>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Ring Spinner -->
<x-aura::spinner type="ring" size="lg" variant="primary" />

<!-- Bouncing Dots Loader -->
<x-aura::spinner type="dots" variant="primary" />

<!-- Equalizer Bars Loader -->
<x-aura::spinner type="bars" variant="primary" />

<!-- Radar Ping Loader -->
<x-aura::spinner type="ping" size="lg" variant="primary" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sizes Variety -->
    <x-aura::code  title="2. Size Varieties (xs, sm, md, lg, xl)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center justify-center gap-6 w-full">
                <div class="flex flex-col items-center gap-2">
                    <x-aura::spinner size="xs" />
                    <span class="text-xs text-zinc-500">xs</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::spinner size="sm" />
                    <span class="text-xs text-zinc-500">sm</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::spinner size="md" />
                    <span class="text-xs text-zinc-500">md</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::spinner size="lg" />
                    <span class="text-xs text-zinc-500">lg</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::spinner size="xl" />
                    <span class="text-xs text-zinc-500">xl</span>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::spinner size="xs" />
<x-aura::spinner size="sm" />
<x-aura::spinner size="md" />
<x-aura::spinner size="lg" />
<x-aura::spinner size="xl" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Color Varieties -->
    <x-aura::code  title="3. Color Varieties (Primary, Success, Warning, Danger, White)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center justify-center gap-6 w-full">
                <x-aura::spinner size="md" variant="default" />
                <x-aura::spinner size="md" variant="primary" />
                <x-aura::spinner size="md" variant="success" />
                <x-aura::spinner size="md" variant="warning" />
                <x-aura::spinner size="md" variant="danger" />

                <div class="px-4 py-2 bg-zinc-900 rounded-xl flex items-center gap-2">
                    <x-aura::spinner size="md" variant="white" />
                    <span class="text-xs text-white font-medium">Dark Mode</span>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::spinner variant="default" />
<x-aura::spinner variant="primary" />
<x-aura::spinner variant="success" />
<x-aura::spinner variant="warning" />
<x-aura::spinner variant="danger" />
<x-aura::spinner variant="white" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Contextual Button & Card Loading Examples -->
    <x-aura::code  title="4. Contextual Loading State Examples">
        <x-slot:preview>
            <div class="space-y-4 w-full max-w-xl">
                <div class="flex flex-wrap items-center gap-3">
                    <x-aura::button variant="primary" size="sm">
                        <x-aura::spinner size="xs" variant="white" />
                        Saving Changes...
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        <x-aura::spinner type="dots" size="xs" />
                        Processing Order
                    </x-aura::button>
                </div>

                {{-- Overlay Card Loading State --}}
                <div class="relative p-5 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 shadow-2xs">
                    <div class="flex items-center justify-between gap-4">
                        <div class="space-y-0.5 min-w-0">
                            <h4 class="text-sm font-bold text-zinc-900 dark:text-white">Monthly Analytics Sync</h4>
                            <p class="text-xs text-zinc-500">Fetching latest event logs from server...</p>
                        </div>
                        <x-aura::spinner size="md" variant="primary" />
                    </div>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Button with Ring Spinner -->
<x-aura::button variant="primary" size="sm">
    <x-aura::spinner size="xs" variant="white" />
    Saving Changes...
</x-aura::button>

<!-- Button with Bouncing Dots -->
<x-aura::button variant="secondary" size="sm">
    <x-aura::spinner type="dots" size="xs" />
    Processing Order
</x-aura::button>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
