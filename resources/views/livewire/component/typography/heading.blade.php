<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Heading - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Typography</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Heading</x-aura::heading>
            <x-aura::subheading size="md">
                Semantic section headers and display titles supporting multiple levels, size scales, font weights, and layout alignments.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::heading level="1" size="xl">Heading Title</x-aura::heading>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Heading Levels (H1 - H6) -->
    <x-aura::code  title="1. Semantic Heading Levels (H1 to H6)">
        <x-slot:preview>
            <div class="space-y-3 w-full">
                <x-aura::heading level="1" size="xl">Level 1 (H1) Heading</x-aura::heading>
                <x-aura::heading level="2" size="lg">Level 2 (H2) Heading</x-aura::heading>
                <x-aura::heading level="3" size="md">Level 3 (H3) Heading</x-aura::heading>
                <x-aura::heading level="4" size="sm">Level 4 (H4) Heading</x-aura::heading>
                <x-aura::heading level="5" size="xs">Level 5 (H5) Heading</x-aura::heading>
                <x-aura::heading level="6" size="xs">Level 6 (H6) Heading</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::heading level="1" size="xl">Level 1 (H1) Heading</x-aura::heading>
<x-aura::heading level="2" size="lg">Level 2 (H2) Heading</x-aura::heading>
<x-aura::heading level="3" size="md">Level 3 (H3) Heading</x-aura::heading>
<x-aura::heading level="4" size="sm">Level 4 (H4) Heading</x-aura::heading>
<x-aura::heading level="5" size="xs">Level 5 (H5) Heading</x-aura::heading>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Display Title Scales -->
    <x-aura::code  title="2. Display Title Scales for Hero Sections">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::heading level="1" size="display-2xl">Display 2XL Title</x-aura::heading>
                <x-aura::heading level="1" size="display-xl">Display XL Title</x-aura::heading>
                <x-aura::heading level="1" size="display-lg">Display Large Title</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::heading level="1" size="display-2xl">Display 2XL Title</x-aura::heading>
<x-aura::heading level="1" size="display-xl">Display XL Title</x-aura::heading>
<x-aura::heading level="1" size="display-lg">Display Large Title</x-aura::heading>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Font Weights -->
    <x-aura::code  title="3. Custom Font Weights">
        <x-slot:preview>
            <div class="space-y-2 w-full">
                <x-aura::heading level="2" size="md" weight="normal">Normal Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="medium">Medium Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="semibold">Semibold Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="bold">Bold Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="extrabold">Extrabold Weight Heading</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::heading level="2" size="md" weight="normal">Normal Weight</x-aura::heading>
<x-aura::heading level="2" size="md" weight="semibold">Semibold Weight</x-aura::heading>
<x-aura::heading level="2" size="md" weight="extrabold">Extrabold Weight</x-aura::heading>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Real-World Dashboard Header Pattern -->
    <x-aura::code title="4. Real-World Dashboard Section Header">
        <x-slot:preview>
            <x-aura::card>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="space-y-1">
                        <x-aura::heading level="2" size="md">Project Settings & Security</x-aura::heading>
                        <x-aura::subheading>Manage API tokens, environment keys, and deployment webhooks.</x-aura::subheading>
                    </div>
                    <div class="flex items-center gap-2 shrink-0">
                        <x-aura::button variant="secondary" size="sm">Audit Log</x-aura::button>
                        <x-aura::button variant="primary" size="sm" icon="plus"><span>Create</span></x-aura::button>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="space-y-1">
            <x-aura::heading level="2" size="md">Project Settings & Security</x-aura::heading>
            <x-aura::subheading>Manage API tokens and deployment webhooks.</x-aura::subheading>
        </div>
        <div class="flex items-center gap-2 shrink-0">
            <x-aura::button variant="secondary" size="sm">Audit Log</x-aura::button>
            <x-aura::button variant="primary" size="sm" icon="plus"><span>Create</span></x-aura::button>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
