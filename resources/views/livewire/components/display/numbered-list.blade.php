<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.components')] #[Title('Numbered List - Aura Wire')] class extends Component {
    public function with(): array
    {
        return [
            'mediaItems' => [
                [
                    'title' => 'Aura Headphones Pro',
                    'subtitle' => 'Wireless Noise Canceling • $299',
                    'description' => 'Premium spatial audio with active noise cancellation and 30-hour battery life.',
                    'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&auto=format&fit=crop&q=80',
                    'badge' => 'Top Seller',
                ],
                [
                    'title' => 'Minimalist Mechanical Keyboard',
                    'subtitle' => 'Hot-swappable Switches • $149',
                    'description' => 'Anodized aluminum chassis with custom linear switches and RGB backlighting.',
                    'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=200&auto=format&fit=crop&q=80',
                    'badge' => 'New Arrival',
                ],
                [
                    'title' => 'Ergonomic Desk Monitor Arm',
                    'subtitle' => 'Heavy Duty Aluminum • $89',
                    'description' => 'Full motion articulation supporting ultra-wide monitors up to 34 inches.',
                    'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=200&auto=format&fit=crop&q=80',
                    'badge' => 'Featured',
                ],
            ],
            'gridCards' => [
                [
                    'title' => 'Design System Tokens',
                    'subtitle' => 'Centralized color palettes, typography scales, and spacing tokens.',
                    'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=300&auto=format&fit=crop&q=80',
                    'badge' => 'Phase 1',
                ],
                [
                    'title' => 'Component Library',
                    'subtitle' => '40+ production-ready Blade & Livewire Volt components.',
                    'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=300&auto=format&fit=crop&q=80',
                    'badge' => 'Phase 2',
                ],
            ],
            'stepItems' => [
                ['title' => 'Install Package', 'subtitle' => 'composer require insoulit/aura-wire'],
                ['title' => 'Publish Assets', 'subtitle' => 'php artisan aura-wire:install'],
                ['title' => 'Build Features', 'subtitle' => 'Use <x-aura::*> tags in views'],
            ],
            'userAvatars' => [
                ['title' => 'Alex Kovacs', 'subtitle' => 'Lead Product Designer', 'image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80', 'badge' => 'Admin'],
                ['title' => 'Sarah Chen', 'subtitle' => 'Senior Frontend Architect', 'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80', 'badge' => 'Maintainer'],
                ['title' => 'Marcus Vance', 'subtitle' => 'DevOps Engineer', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80', 'badge' => 'Member'],
            ],
        ];
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Display Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Numbered List</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Multi-purpose list components with images, action toolbars, card grids, step bars, and compact row lists.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::numbered-list&gt;
            </code>
        </div>
    </div>

    <!-- 1. Rich Media List with Images & Actions -->
    <x-aura::code class="w-full" title="1. Rich Media List (with Thumbnails & Actions)">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$mediaItems" variant="media" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::numbered-list :items="[
    [
        'title' =&gt; 'Aura Headphones Pro',
        'subtitle' =&gt; 'Wireless Noise Canceling • $299',
        'description' =&gt; 'Premium spatial audio with active noise cancellation.',
        'image' =&gt; 'https://images.unsplash.com/...',
        'badge' =&gt; 'Top Seller',
    ],
    [
        'title' =&gt; 'Minimalist Mechanical Keyboard',
        'subtitle' =&gt; 'Hot-swappable Switches • $149',
        'description' =&gt; 'Anodized aluminum chassis with custom linear switches.',
        'image' =&gt; 'https://images.unsplash.com/...',
        'badge' =&gt; 'New Arrival',
    ],
]" variant="media" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Card Grid List with Images -->
    <x-aura::code class="w-full" title="2. Two-Column Card Grid List">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$gridCards" variant="grid" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::numbered-list :items="[
    ['title' =&gt; 'Design System Tokens', 'subtitle' =&gt; 'Color palettes and typography.', 'image' =&gt; 'https://...', 'badge' =&gt; 'Phase 1'],
    ['title' =&gt; 'Component Library', 'subtitle' =&gt; '40+ production-ready components.', 'image' =&gt; 'https://...', 'badge' =&gt; 'Phase 2'],
]" variant="grid" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Process Step Bar -->
    <x-aura::code class="w-full" title="3. Horizontal Process Steps Bar">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$stepItems" variant="steps" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::numbered-list :items="[
    ['title' =&gt; 'Install Package', 'subtitle' =&gt; 'composer require insoulit/aura-wire'],
    ['title' =&gt; 'Publish Assets', 'subtitle' =&gt; 'php artisan aura-wire:install'],
    ['title' =&gt; 'Build Features', 'subtitle' =&gt; 'Use &lt;x-aura::*&gt; tags in views'],
]" variant="steps" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Compact User Avatar List -->
    <x-aura::code class="w-full" title="4. Compact Row List with Avatars">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$userAvatars" variant="compact" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::numbered-list :items="[
    ['title' =&gt; 'Alex Kovacs', 'subtitle' =&gt; 'Lead Product Designer', 'image' =&gt; 'https://...', 'badge' =&gt; 'Admin'],
    ['title' =&gt; 'Sarah Chen', 'subtitle' =&gt; 'Senior Frontend Architect', 'image' =&gt; 'https://...', 'badge' =&gt; 'Maintainer'],
]" variant="compact" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
