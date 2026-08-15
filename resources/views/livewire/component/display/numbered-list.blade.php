<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Numbered List - Aura Wire')] 
class extends Component {
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
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Data</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Numbered List</x-aura::heading>
            <x-aura::subheading size="md">
                Multi-purpose list components with images, action toolbars, card grids, step bars, and compact row lists.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::numbered-list :items="$items" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Rich Media List with Images & Actions -->
    <x-aura::code  title="1. Rich Media List (with Thumbnails & Actions)">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$mediaItems" variant="media" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::numbered-list :items="[
    [
        'title' => 'Aura Headphones Pro',
        'subtitle' => 'Wireless Noise Canceling • $299',
        'description' => 'Premium spatial audio with active noise cancellation.',
        'image' => 'https://images.unsplash.com/...',
        'badge' => 'Top Seller',
    ],
    [
        'title' => 'Minimalist Mechanical Keyboard',
        'subtitle' => 'Hot-swappable Switches • $149',
        'description' => 'Anodized aluminum chassis with custom linear switches.',
        'image' => 'https://images.unsplash.com/...',
        'badge' => 'New Arrival',
    ],
]" variant="media" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Card Grid List with Images -->
    <x-aura::code  title="2. Two-Column Card Grid List">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$gridCards" variant="grid" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::numbered-list :items="[
    ['title' => 'Design System Tokens', 'subtitle' => 'Color palettes and typography.', 'image' => 'https://...', 'badge' => 'Phase 1'],
    ['title' => 'Component Library', 'subtitle' => '40+ production-ready components.', 'image' => 'https://...', 'badge' => 'Phase 2'],
]" variant="grid" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Process Step Bar -->
    <x-aura::code  title="3. Horizontal Process Steps Bar">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$stepItems" variant="steps" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::numbered-list :items="[
    ['title' => 'Install Package', 'subtitle' => 'composer require insoulit/aura-wire'],
    ['title' => 'Publish Assets', 'subtitle' => 'php artisan aura-wire:install'],
    ['title' => 'Build Features', 'subtitle' => 'Use <x-aura::*> tags in views'],
]" variant="steps" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Compact User Avatar List -->
    <x-aura::code  title="4. Compact Row List with Avatars">
        <x-slot:preview>
            <div class="w-full max-w-2xl">
                <x-aura::numbered-list :items="$userAvatars" variant="compact" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::numbered-list :items="[
    ['title' => 'Alex Kovacs', 'subtitle' => 'Lead Product Designer', 'image' => 'https://...', 'badge' => 'Admin'],
    ['title' => 'Sarah Chen', 'subtitle' => 'Senior Frontend Architect', 'image' => 'https://...', 'badge' => 'Maintainer'],
]" variant="compact" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
