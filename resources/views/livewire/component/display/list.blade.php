<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('List - Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'features' => [
                ['title' => 'Tailwind CSS v4 Integration', 'subtitle' => 'Zero-config styling with dark mode and CSS variables.', 'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=100&auto=format&fit=crop&q=80', 'badge' => 'Core'],
                ['title' => 'Livewire Volt Single-File Views', 'subtitle' => 'Unified component logic and Blade templating in one file.', 'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=100&auto=format&fit=crop&q=80', 'badge' => 'Blade'],
                ['title' => 'Polymorphic Component Engine', 'subtitle' => 'Flexible prop schemas for links, buttons, and custom slots.', 'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=100&auto=format&fit=crop&q=80', 'badge' => 'UI'],
            ],
            'compactList' => [
                ['title' => 'System Backup Completed', 'subtitle' => 'Automated snapshot created at 04:00 AM', 'badge' => 'Success'],
                ['title' => 'SSL Certificate Renewed', 'subtitle' => 'Valid until August 2027', 'badge' => 'Active'],
                ['title' => 'Database Vacuum Run', 'subtitle' => 'Cleared 420MB unused index space', 'badge' => 'Optimized'],
            ],
        ];
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">List (Un-numbered)</x-aura::heading>
            <x-aura::subheading size="md">
                Clean un-numbered list components supporting media rows, compact list groups, cards, and minimalist layout.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>@verbatim<x-aura::list :items="$items" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Un-numbered Media List -->
    <x-aura::code class="w-full" title="1. Un-numbered Media List">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::list :items="$features" variant="media" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::list :items="[
    ['title' => 'Tailwind CSS v4 Integration', 'subtitle' => 'Zero-config styling with dark mode.', 'image' => 'https://...', 'badge' => 'Core'],
    ['title' => 'Livewire Volt Single-File Views', 'subtitle' => 'Unified component logic in one file.', 'image' => 'https://...', 'badge' => 'Blade'],
    ['title' => 'Polymorphic Component Engine', 'subtitle' => 'Flexible prop schemas and slots.', 'image' => 'https://...', 'badge' => 'UI'],
]" variant="media" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Un-numbered Compact List Group -->
    <x-aura::code class="w-full" title="2. Un-numbered Compact List Group">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::list :items="$compactList" variant="compact" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::list :items="[
    ['title' => 'System Backup Completed', 'subtitle' => 'Automated snapshot created', 'badge' => 'Success'],
    ['title' => 'SSL Certificate Renewed', 'subtitle' => 'Valid until August 2027', 'badge' => 'Active'],
    ['title' => 'Database Vacuum Run', 'subtitle' => 'Cleared 420MB unused space', 'badge' => 'Optimized'],
]" variant="compact" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Un-numbered Card List -->
    <x-aura::code class="w-full" title="3. Un-numbered Card List">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::list :items="$features" variant="card" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::list :items="[
    ['title' => 'Tailwind CSS v4 Integration', 'subtitle' => 'Zero-config styling.'],
    ['title' => 'Livewire Volt Single-File Views', 'subtitle' => 'Unified component logic.'],
]" variant="card" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
