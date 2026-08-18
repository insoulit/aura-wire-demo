<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Container - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Container</x-aura::heading>
            <x-aura::subheading size="md">
                Responsive max-width container wrapper enforcing consistent horizontal padding and center alignment across screen sizes.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::container size="7xl">
    <!-- Page content -->
</x-aura::container>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Default Container (7xl) -->
    <x-aura::code  title="1. Default Container (size='7xl')">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4">
                <x-aura::container size="sm">
                    <div class="bg-white dark:bg-zinc-900 rounded-lg p-4 border border-zinc-200 dark:border-zinc-800 text-center">
                        <x-aura::text size="sm">Container Content (sm size)</x-aura::text>
                    </div>
                </x-aura::container>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::container size="7xl">
    <x-aura::text size="sm">Centered page content...</x-aura::text>
</x-aura::container>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Container Sizes -->
    <x-aura::code  title="2. Custom Container Sizes (sm to 7xl)">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::container size="md">
                    <div class="bg-zinc-100 dark:bg-zinc-900 rounded-lg p-3 border border-zinc-200 dark:border-zinc-800 text-center">
                        <x-aura::text size="xs">size="md" (max-w-md)</x-aura::text>
                    </div>
                </x-aura::container>
                <x-aura::container size="xl">
                    <div class="bg-zinc-100 dark:bg-zinc-900 rounded-lg p-3 border border-zinc-200 dark:border-zinc-800 text-center">
                        <x-aura::text size="xs">size="xl" (max-w-xl)</x-aura::text>
                    </div>
                </x-aura::container>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::container size="md">
    <div>Medium container content</div>
</x-aura::container>

<x-aura::container size="xl">
    <div>Extra large container content</div>
</x-aura::container>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
