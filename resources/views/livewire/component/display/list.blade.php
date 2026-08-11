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
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">List (Un-numbered)</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Clean un-numbered list components supporting media rows, compact list groups, cards, and minimalist layout.
        </x-aura::subheading>
        <div class="pt-1 flex items-center gap-2">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::list&gt;
            </code>
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::numbered-list :numbered="false"&gt;
            </code>
        </div>
    </div>

    <!-- 1. Un-numbered Media List -->
    <x-aura::code class="w-full" title="1. Un-numbered Media List">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::list :items="$features" variant="media" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::list :items="[
    ['title' =&gt; 'Tailwind CSS v4 Integration', 'subtitle' =&gt; 'Zero-config styling with dark mode.', 'image' =&gt; 'https://...', 'badge' =&gt; 'Core'],
    ['title' =&gt; 'Livewire Volt Single-File Views', 'subtitle' =&gt; 'Unified component logic in one file.', 'image' =&gt; 'https://...', 'badge' =&gt; 'Blade'],
    ['title' =&gt; 'Polymorphic Component Engine', 'subtitle' =&gt; 'Flexible prop schemas and slots.', 'image' =&gt; 'https://...', 'badge' =&gt; 'UI'],
]" variant="media" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Un-numbered Compact List Group -->
    <x-aura::code class="w-full" title="2. Un-numbered Compact List Group">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::list :items="$compactList" variant="compact" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::list :items="[
    ['title' =&gt; 'System Backup Completed', 'subtitle' =&gt; 'Automated snapshot created', 'badge' =&gt; 'Success'],
    ['title' =&gt; 'SSL Certificate Renewed', 'subtitle' =&gt; 'Valid until August 2027', 'badge' =&gt; 'Active'],
    ['title' =&gt; 'Database Vacuum Run', 'subtitle' =&gt; 'Cleared 420MB unused space', 'badge' =&gt; 'Optimized'],
]" variant="compact" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Un-numbered Card List -->
    <x-aura::code class="w-full" title="3. Un-numbered Card List">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::list :items="$features" variant="card" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::list :items="[
    ['title' =&gt; 'Tailwind CSS v4 Integration', 'subtitle' =&gt; 'Zero-config styling.'],
    ['title' =&gt; 'Livewire Volt Single-File Views', 'subtitle' =&gt; 'Unified component logic.'],
]" variant="card" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
