<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon Button - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Action</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Icon Button</x-aura::heading>
            <x-aura::subheading size="md">
                Compact circular and square icon triggers powered by 1,000+ Lucide icons for toolbars, list controls, and quick actions.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::icon-button icon="pencil" variant="subtle" size="md" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. General Action Variants (Diverse Icons) -->
    <x-aura::code  title="1. Icon Button Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::icon-button icon="pencil" variant="primary" label="Primary Edit" />
                <x-aura::icon-button icon="eye" variant="secondary" label="Secondary View" />
                <x-aura::icon-button icon="heart" variant="subtle"  label="Subtle Favorite" />
                <x-aura::icon-button icon="settings" variant="outline" label="Outline Settings" />
                <x-aura::icon-button icon="share-2" variant="ghost" label="Ghost Share" />
                <x-aura::icon-button icon="search" variant="secondary" label="Search" />
                <x-aura::icon-button icon="plus" variant="primary" label="Add New" />
                <x-aura::icon-button icon="sparkles" variant="link" href="#" label="Link Sparkles" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::icon-button icon="pencil" variant="primary" label="Edit" />
<x-aura::icon-button icon="eye" variant="secondary" label="View" />
<x-aura::icon-button icon="heart" variant="subtle" label="Favorite" />
<x-aura::icon-button icon="settings" variant="outline" label="Settings" />
<x-aura::icon-button icon="share-2" variant="ghost" label="Share" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Destructive & Delete Icon Buttons -->
    <x-aura::code  title="2. Destructive & Delete Actions (Red Icon on Hover)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::icon-button icon="trash-2" variant="danger" label="Hover Red Delete (Default)" />
                <x-aura::icon-button icon="trash" variant="danger-subtle" label="Subtle Danger" />
                <x-aura::icon-button icon="trash-2" variant="danger-solid" label="Solid Red Delete" />
                <x-aura::icon-button icon="x" variant="danger" label="Cancel / Close" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Hover Red Delete (No solid red background by default) -->
<x-aura::icon-button icon="trash-2" variant="danger" label="Delete" />

<!-- Subtle Danger -->
<x-aura::icon-button icon="trash" variant="danger-subtle" label="Delete" />

<!-- Solid Red Background (For critical alerts) -->
<x-aura::icon-button icon="trash-2" variant="danger-solid" label="Solid Delete" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Shapes (Circle vs Square) -->
    <x-aura::code  title="3. Shapes (Circle vs Square)">
        <x-slot:preview>
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold text-zinc-500 w-28">Circle (Default):</span>
                    <x-aura::icon-button icon="pencil" variant="primary" shape="circle" label="Circle Primary" />
                    <x-aura::icon-button icon="eye" variant="secondary" shape="circle" label="Circle Secondary" />
                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="circle" label="Circle Bookmark" />
                    <x-aura::icon-button icon="trash-2" variant="danger" shape="circle" label="Circle Delete" />
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold text-zinc-500 w-28">Square:</span>
                    <x-aura::icon-button icon="pencil" variant="primary" shape="square" label="Square Primary" />
                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" label="Square Secondary" />
                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="square" label="Square Bookmark" />
                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" label="Square Delete" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Circle (Default) -->
<x-aura::icon-button icon="pencil" variant="primary" shape="circle" />

<!-- Square -->
<x-aura::icon-button icon="pencil" variant="primary" shape="square" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Sizes -->
    <x-aura::code  title="4. Proportional Sizes (xs, sm, md, lg, xl)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::icon-button icon="bell" size="xs" variant="secondary" label="Extra Small" />
                <x-aura::icon-button icon="bell" size="sm" variant="secondary" label="Small" />
                <x-aura::icon-button icon="bell" size="md" variant="secondary" label="Medium" />
                <x-aura::icon-button icon="bell" size="lg" variant="secondary" label="Large" />
                <x-aura::icon-button icon="bell" size="xl" variant="secondary" label="Extra Large" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::icon-button icon="bell" size="xs" />
<x-aura::icon-button icon="bell" size="sm" />
<x-aura::icon-button icon="bell" size="md" />
<x-aura::icon-button icon="bell" size="lg" />
<x-aura::icon-button icon="bell" size="xl" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Real World Table & Toolbar Actions -->
    <x-aura::code  title="5. Real World Table Actions">
        <x-slot:preview>
            <x-aura::card>
                <div>
                    <h4 class="text-sm font-bold text-zinc-900 dark:text-white">User Account: Alex Kovacs</h4>
                    <p class="text-xs text-zinc-500">alex@example.com</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View Profile" />
                    <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit Profile" />
                    <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" />
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="flex items-center gap-1.5">
    <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View Profile" />
    <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit Profile" />
    <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" />
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
