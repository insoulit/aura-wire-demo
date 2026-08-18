<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header Page Intro -->
    <x-aura::card>
        <div class="space-y-4 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Icon</x-aura::heading>
            <x-aura::subheading size="md">
                Render crisp Lucide SVG icons with customizable scales, color variations, and optional boxed container badges.
            </x-aura::subheading>
            <div class="pt-1">
                <x-aura::button variant="secondary" size="sm" href="/components/icon-library" icon="search">
                    Browse
                </x-aura::button>
            </div>
        </div>
    </x-aura::card>

    <!-- 1. Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<!-- Bare SVG Icon -->
<x-aura::icon name="sparkles" size="md" />

<!-- Boxed Container Icon Badge -->
<x-aura::icon name="shopping-bag" variant="subtle" size="lg" />
<x-aura::icon name="shield-check" variant="primary" size="lg" shape="circle" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Scale Sizes -->
    <x-aura::code title="Scale Sizes (xs, sm, md, lg, xl)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center justify-center gap-8 w-full py-4">
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="star" size="xs" />
                    <span class="text-xs text-zinc-500 font-mono">xs (14px)</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="star" size="sm" />
                    <span class="text-xs text-zinc-500 font-mono">sm (16px)</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="star" size="md" />
                    <span class="text-xs text-zinc-500 font-mono">md (20px)</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="star" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">lg (24px)</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="star" size="xl" />
                    <span class="text-xs text-zinc-500 font-mono">xl (32px)</span>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::icon name="star" size="xs" />
<x-aura::icon name="star" size="sm" />
<x-aura::icon name="star" size="md" />
<x-aura::icon name="star" size="lg" />
<x-aura::icon name="star" size="xl" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Container Box Variants -->
    <x-aura::code title="Container Box Variants (Subtle, Primary, Success, Warning, Danger, Info, Outline)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center justify-center gap-6 w-full py-4">
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="layers" variant="subtle" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">subtle</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="zap" variant="primary" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">primary</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="check" variant="success" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">success</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="alert-triangle" variant="warning" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">warning</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="trash-2" variant="danger" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">danger</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="info" variant="info" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">info</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="compass" variant="outline" size="lg" />
                    <span class="text-xs text-zinc-500 font-mono">outline</span>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::icon name="layers" variant="subtle" size="lg" />
<x-aura::icon name="zap" variant="primary" size="lg" />
<x-aura::icon name="check" variant="success" size="lg" />
<x-aura::icon name="alert-triangle" variant="warning" size="lg" />
<x-aura::icon name="trash-2" variant="danger" size="lg" />
<x-aura::icon name="info" variant="info" size="lg" />
<x-aura::icon name="compass" variant="outline" size="lg" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Container Shapes -->
    <x-aura::code title="Container Shapes (Rounded, Circle, Square)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center justify-center gap-8 w-full py-4">
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="sparkles" variant="subtle" size="lg" shape="rounded" />
                    <span class="text-xs text-zinc-500 font-mono">rounded</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="sparkles" variant="subtle" size="lg" shape="circle" />
                    <span class="text-xs text-zinc-500 font-mono">circle</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <x-aura::icon name="sparkles" variant="subtle" size="lg" shape="square" />
                    <span class="text-xs text-zinc-500 font-mono">square</span>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::icon name="sparkles" variant="subtle" size="lg" shape="rounded" />
<x-aura::icon name="sparkles" variant="subtle" size="lg" shape="circle" />
<x-aura::icon name="sparkles" variant="subtle" size="lg" shape="square" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Feature Highlight Card Pattern -->
    <x-aura::code title="Feature Card Pattern">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                <x-aura::card>
                    <div class="space-y-4">
                        <x-aura::icon name="shield-check" variant="subtle" size="lg" />
                        <div class="space-y-1">
                            <x-aura::heading level="3" size="sm">End to End Security</x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">Enterprise grade encryption and two factor authentication protect user data.</x-aura::text>
                        </div>
                    </div>
                </x-aura::card>

                <x-aura::card>
                    <div class="space-y-4">
                        <x-aura::icon name="zap" variant="primary" size="lg" />
                        <div class="space-y-1">
                            <x-aura::heading level="3" size="sm">Real time Performance</x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">Ultra fast reactive state updates with automated background caching.</x-aura::text>
                        </div>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="space-y-4">
        <x-aura::icon name="shield-check" variant="subtle" size="lg" />
        <div class="space-y-1">
            <x-aura::heading level="3" size="sm">End to End Security</x-aura::heading>
            <x-aura::text variant="subtle" size="sm">Enterprise grade encryption and two factor authentication protect user data.</x-aura::text>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
