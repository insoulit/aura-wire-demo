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
                ['label' => 'E-Commerce Store', 'href' => '#'],
                ['label' => 'Product Catalog', 'href' => '#'],
                ['label' => 'Audio & Headphones', 'href' => '#'],
                ['label' => 'Aura Pro Wireless'],
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
                <x-aura::kicker>Navigation</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Breadcrumb</x-aura::heading>
            <x-aura::subheading size="md">
                Hierarchy navigation trails supporting plain text, rectangular panel containers, pill-shaped badge groups, and custom separators.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::breadcrumb :items="['Home' =&gt; '/', 'Docs' =&gt; '/docs', 'Breadcrumb' =&gt; '#']" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Separators Variety -->
    <x-aura::code class="w-full" title="1. Separator Varieties (Chevron, Slash, Dot, Arrow)">
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
        <x-slot:codeSlot>&lt;!-- Chevron Separator (Default) --&gt;
&lt;x-aura::breadcrumb :items="[
    ['label' =&gt; 'Home', 'href' =&gt; '#'],
    ['label' =&gt; 'Components', 'href' =&gt; '#'],
    ['label' =&gt; 'Breadcrumbs'],
]" separator="chevron" /&gt;

&lt;!-- Slash Separator --&gt;
&lt;x-aura::breadcrumb :items="..." separator="slash" /&gt;

&lt;!-- Dot Separator --&gt;
&lt;x-aura::breadcrumb :items="..." separator="dot" /&gt;

&lt;!-- Arrow Separator --&gt;
&lt;x-aura::breadcrumb :items="..." separator="arrow" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Rectangular Panel Box vs Pill-Shaped Badges -->
    <x-aura::code class="w-full" title="2. Rectangular Panel Container vs Circular Pill Badges">
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
        <x-slot:codeSlot>&lt;!-- Rectangular Panel Box --&gt;
&lt;x-aura::breadcrumb :items="$items" variant="rectangle" :homeIcon="true" /&gt;

&lt;!-- Circular Pill Badges --&gt;
&lt;x-aura::breadcrumb :items="$items" variant="pills" :homeIcon="true" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Deep Nested Trail with Home Icon -->
    <x-aura::code class="w-full" title="3. Deep Navigation Trail with Home Icon">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::breadcrumb :items="$deepItems" :homeIcon="true" separator="chevron" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::breadcrumb :items="[
    ['label' =&gt; 'Dashboard', 'href' =&gt; '#'],
    ['label' =&gt; 'E-Commerce Store', 'href' =&gt; '#'],
    ['label' =&gt; 'Product Catalog', 'href' =&gt; '#'],
    ['label' =&gt; 'Audio & Headphones', 'href' =&gt; '#'],
    ['label' =&gt; 'Aura Pro Wireless'],
]" :homeIcon="true" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
