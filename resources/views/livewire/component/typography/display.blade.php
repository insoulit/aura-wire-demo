<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Display - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Typography</x-aura::kicker>
                <x-aura::badge variant="subtle" size="md">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Display</x-aura::heading>
            <x-aura::subheading size="md">
                High-impact display typography designed for hero headlines, billboard marketing banners, giant KPI metrics, and landing sections.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::display size="xl">Elevate Your Product</x-aura::display>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Display Size Scales (2xl, xl, lg, md, sm) -->
    <x-aura::code title="1. Display Size Scales (2xl, xl, lg, md, sm)">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <div class="space-y-1">
                    <x-aura::badge variant="subtle" size="md">size="2xl"</x-aura::badge>
                    <x-aura::display size="2xl">Display 2XL Title</x-aura::display>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="xl" (Default)</x-aura::badge>
                    <x-aura::display size="xl">Display XL Title</x-aura::display>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="lg"</x-aura::badge>
                    <x-aura::display size="lg">Display Large Title</x-aura::display>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="md"</x-aura::badge>
                    <x-aura::display size="md">Display Medium Title</x-aura::display>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="sm"</x-aura::badge>
                    <x-aura::display size="sm">Display Small Title</x-aura::display>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::display size="2xl">Display 2XL Title</x-aura::display>
<x-aura::display size="xl">Display XL Title</x-aura::display>
<x-aura::display size="lg">Display Large Title</x-aura::display>
<x-aura::display size="md">Display Medium Title</x-aura::display>
<x-aura::display size="sm">Display Small Title</x-aura::display>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Gradient Headline -->
    <x-aura::code title="2. Gradient Marketing Headlines">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::display size="lg" :gradient="true">
                    Built for Modern Web Applications
                </x-aura::display>
                <x-aura::display size="md" :gradient="true" weight="black">
                    Ship 10x Faster with Aura Wire
                </x-aura::display>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim{{-- Gradient Display Headline --}}
<x-aura::display size="lg" :gradient="true">
    Built for Modern Web Applications
</x-aura::display>

<x-aura::display size="md" :gradient="true" weight="black">
    Ship 10x Faster with Aura Wire
</x-aura::display>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Font Weights -->
    <x-aura::code title="3. Custom Font Weights">
        <x-slot:preview>
            <div class="space-y-3 w-full">
                <div class="space-y-0.5">
                    <x-aura::badge variant="neutral" size="md">weight="black" (900)</x-aura::badge>
                    <x-aura::display size="sm" weight="black">Ultra-Bold Black Weight Display</x-aura::display>
                </div>
                <div class="space-y-0.5 border-t border-zinc-200 dark:border-zinc-800 pt-2">
                    <x-aura::badge variant="neutral" size="md">weight="extrabold" (800, Default)</x-aura::badge>
                    <x-aura::display size="sm" weight="extrabold">Extrabold Weight Display</x-aura::display>
                </div>
                <div class="space-y-0.5 border-t border-zinc-200 dark:border-zinc-800 pt-2">
                    <x-aura::badge variant="neutral" size="md">weight="bold" (700)</x-aura::badge>
                    <x-aura::display size="sm" weight="bold">Bold Weight Display</x-aura::display>
                </div>
                <div class="space-y-0.5 border-t border-zinc-200 dark:border-zinc-800 pt-2">
                    <x-aura::badge variant="neutral" size="md">weight="semibold" (600)</x-aura::badge>
                    <x-aura::display size="sm" weight="semibold">Semibold Weight Display</x-aura::display>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::display size="sm" weight="black">Black Weight Display</x-aura::display>
<x-aura::display size="sm" weight="extrabold">Extrabold Weight Display</x-aura::display>
<x-aura::display size="sm" weight="bold">Bold Weight Display</x-aura::display>
<x-aura::display size="sm" weight="semibold">Semibold Weight Display</x-aura::display>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Real-World Landing Page Hero Pattern -->
    <x-aura::code title="4. Real-World Landing Page Hero Pattern">
        <x-slot:preview>
            <div class="p-8 sm:p-12 rounded-3xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 text-center flex flex-col items-center w-full">
                <div class="space-y-4 max-w-2xl flex flex-col items-center">
                    <div class="flex items-center gap-2">
                        <x-aura::kicker>NEXT-GEN LIVEWIRE PRIMITIVES</x-aura::kicker>
                        <x-aura::badge variant="positive" size="md">v2.0</x-aura::badge>
                    </div>
                    <x-aura::display size="xl" :gradient="true">
                        The Developer Suite for Rapid UI Delivery
                    </x-aura::display>
                    <x-aura::subheading size="lg">
                        Compose rich, accessible, full-stack Laravel applications with beautifully orchestrated Blade components.
                    </x-aura::subheading>
                </div>
                <div class="pt-6 flex flex-wrap items-center justify-center gap-3">
                    <x-aura::button variant="primary" iconTrailing="arrow-right">Get Started Free</x-aura::button>
                    <x-aura::button variant="ghost">Browse Catalog</x-aura::button>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="p-8 sm:p-12 rounded-3xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 text-center flex flex-col items-center">
    <div class="space-y-4 max-w-2xl flex flex-col items-center">
        <div class="flex items-center gap-2">
            <x-aura::kicker>NEXT-GEN LIVEWIRE PRIMITIVES</x-aura::kicker>
            <x-aura::badge variant="positive" size="md">v2.0</x-aura::badge>
        </div>
        <x-aura::display size="xl" :gradient="true">
            The Developer Suite for Rapid UI Delivery
        </x-aura::display>
        <x-aura::subheading size="lg">
            Compose rich, accessible, full-stack Laravel applications with beautifully orchestrated Blade components.
        </x-aura::subheading>
    </div>
    <div class="pt-6 flex flex-wrap items-center justify-center gap-3">
        <x-aura::button variant="primary" iconTrailing="arrow-right">Get Started Free</x-aura::button>
        <x-aura::button variant="ghost">Browse Catalog</x-aura::button>
    </div>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
