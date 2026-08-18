<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Tag - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Tag</x-aura::heading>
            <x-aura::subheading size="md">
                Compact pills with generous horizontal padding for labeling, filtering, categories, and active filters.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::tag variant="primary" shape="rounded" size="md">Label</x-aura::tag>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code  title="1. Color Variants">
        <x-slot:preview>
            <div class="flex flex-wrap gap-2.5 items-center">
                <x-aura::tag variant="default">Default Tag</x-aura::tag>
                <x-aura::tag variant="primary">Primary</x-aura::tag>
                <x-aura::tag variant="success">Success</x-aura::tag>
                <x-aura::tag variant="warning">Warning</x-aura::tag>
                <x-aura::tag variant="danger">Danger</x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::tag variant="default">Default Tag</x-aura::tag>
<x-aura::tag variant="primary">Primary</x-aura::tag>
<x-aura::tag variant="success">Success</x-aura::tag>
<x-aura::tag variant="warning">Warning</x-aura::tag>
<x-aura::tag variant="danger">Danger</x-aura::tag>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code  title="2. Sizes (with Enhanced X-Axis Padding)">
        <x-slot:preview>
            <div class="flex flex-wrap gap-3 items-center">
                <x-aura::tag size="sm" variant="primary">Small (sm: px-3)</x-aura::tag>
                <x-aura::tag size="md" variant="primary">Medium (md: px-3.5)</x-aura::tag>
                <x-aura::tag size="lg" variant="primary">Large (lg: px-4)</x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::tag size="sm" variant="primary">Small (sm)</x-aura::tag>
<x-aura::tag size="md" variant="primary">Medium (md)</x-aura::tag>
<x-aura::tag size="lg" variant="primary">Large (lg)</x-aura::tag>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Removable / Filter Tags -->
    <x-aura::code  title="3. Removable Active Filter Tags">
        <x-slot:preview>
            <div class="flex flex-wrap gap-2.5 items-center">
                <x-aura::tag variant="default">
                    <span>Category: Design</span>
                    <button type="button" class="hover:bg-zinc-200 dark:hover:bg-zinc-700 rounded-full p-0.5"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </x-aura::tag>

                <x-aura::tag variant="primary">
                    <span>Framework: Laravel</span>
                    <button type="button" class="hover:bg-zinc-700 dark:hover:bg-zinc-200 rounded-full p-0.5"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </x-aura::tag>

                <x-aura::tag variant="success">
                    <span>Status: Published</span>
                    <button type="button" class="hover:bg-emerald-200 dark:hover:bg-emerald-900 rounded-full p-0.5"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::tag variant="primary">
    <span>Framework: Laravel</span>
    <button type="button" class="hover:bg-zinc-700 rounded-full p-0.5">
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
</x-aura::tag>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Shapes (Pill & Rounded) -->
    <x-aura::code  title="4. Tag Shapes (Pill & Rounded)">
        <x-slot:preview>
            <div class="flex flex-wrap gap-3 items-center">
                <x-aura::tag pill variant="primary">Pill Shape (Default)</x-aura::tag>
                <x-aura::tag rounded variant="primary">Rounded Shape</x-aura::tag>
                <x-aura::tag rounded variant="success">Rounded Success</x-aura::tag>
                <x-aura::tag rounded variant="warning">Rounded Warning</x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Default Pill Shape -->
<x-aura::tag shape="pill" variant="primary">Pill Shape</x-aura::tag>

<!-- Rounded Shape -->
<x-aura::tag rounded variant="primary">Rounded Shape</x-aura::tag>
<x-aura::tag shape="rounded" variant="success">Rounded Success</x-aura::tag>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
