<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Breadcrumb - Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'simpleItems' => [
                ['label' => 'Home', 'href' => '#'],
                ['label' => 'Components', 'href' => '#'],
                ['label' => 'Breadcrumbs'],
            ],
            'deepItems' => [
                ['label' => 'Dashboard', 'href' => '#'],
                ['label' => 'E Commerce Store', 'href' => '#'],
                ['label' => 'Product Catalog', 'href' => '#'],
                ['label' => 'Audio & Headphones', 'href' => '#'],
                ['label' => 'Aura Pro Wireless'],
            ],
        ];
    }
};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Navigation</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Breadcrumb</x-aura::heading>
            <x-aura::subheading size="md">
                Hierarchy navigation trails supporting plain text, rectangular panel containers, pill-shaped badge groups, and custom separators.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::breadcrumb :items="['Home' => '/', 'Docs' => '/docs', 'Breadcrumb' => '#']" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Separators Variety -->
    <x-aura::code  title="1. Separator Varieties (Chevron, Slash, Dot, Arrow)">
        <x-slot:preview>
            <div class="space-y-5 w-full">
                <div class="space-y-1">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Chevron (Default):</p>
                    <x-aura::breadcrumb :items="$simpleItems" separator="chevron" />
                </div>

                <div class="space-y-1">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Slash (/):</p>
                    <x-aura::breadcrumb :items="$simpleItems" separator="slash" />
                </div>

                <div class="space-y-1">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Dot (•):</p>
                    <x-aura::breadcrumb :items="$simpleItems" separator="dot" />
                </div>

                <div class="space-y-1">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Arrow (&rarr;):</p>
                    <x-aura::breadcrumb :items="$simpleItems" separator="arrow" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Chevron Separator (Default) -->
<x-aura::breadcrumb :items="[
    ['label' => 'Home', 'href' => '#'],
    ['label' => 'Components', 'href' => '#'],
    ['label' => 'Breadcrumbs'],
]" separator="chevron" />

<!-- Slash Separator -->
<x-aura::breadcrumb :items="..." separator="slash" />

<!-- Dot Separator -->
<x-aura::breadcrumb :items="..." separator="dot" />

<!-- Arrow Separator -->
<x-aura::breadcrumb :items="..." separator="arrow" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Rectangular Panel Box vs Pill-Shaped Badges -->
    <x-aura::code  title="2. Rectangular Panel Container vs Circular Pill Badges">
        <x-slot:preview>
            <div class="space-y-6 w-full">
                <div class="space-y-2">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Rectangular Panel Box (variant="rectangle"):</p>
                    <x-aura::breadcrumb :items="$deepItems" variant="rectangle" :homeIcon="true" />
                </div>

                <div class="space-y-2">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Circular Pill Badges (variant="pills"):</p>
                    <x-aura::breadcrumb :items="$simpleItems" variant="pills" :homeIcon="true" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Rectangular Panel Box -->
<x-aura::breadcrumb :items="$items" variant="rectangle" :homeIcon="true" />

<!-- Circular Pill Badges -->
<x-aura::breadcrumb :items="$items" variant="pills" :homeIcon="true" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Deep Nested Trail with Home Icon -->
    <x-aura::code  title="3. Deep Navigation Trail with Home Icon">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::breadcrumb :items="$deepItems" :homeIcon="true" separator="chevron" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::breadcrumb :items="[
    ['label' => 'Dashboard', 'href' => '#'],
    ['label' => 'E Commerce Store', 'href' => '#'],
    ['label' => 'Product Catalog', 'href' => '#'],
    ['label' => 'Audio & Headphones', 'href' => '#'],
    ['label' => 'Aura Pro Wireless'],
]" :homeIcon="true" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
