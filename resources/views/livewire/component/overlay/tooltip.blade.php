<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Tooltip - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Overlay</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Tooltip</x-aura::heading>
            <x-aura::subheading size="md">
                Hover and focus popover tooltips with directional placement options.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>@verbatim<x-aura::tooltip text="Edit profile" position="top">
    <x-aura::icon-button icon="pencil" />
</x-aura::tooltip>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Directional Tooltips -->
    <x-aura::code class="w-full" title="1. Directional Positions (Top, Right, Bottom, Left)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6 py-6 justify-center">
                <x-aura::tooltip text="Tooltip on Top" position="top">
                    <x-aura::button variant="secondary" size="sm">Hover Top</x-aura::button>
                </x-aura::tooltip>

                <x-aura::tooltip text="Tooltip on Bottom" position="bottom">
                    <x-aura::button variant="secondary" size="sm">Hover Bottom</x-aura::button>
                </x-aura::tooltip>

                <x-aura::tooltip text="Tooltip on Left" position="left">
                    <x-aura::button variant="secondary" size="sm">Hover Left</x-aura::button>
                </x-aura::tooltip>

                <x-aura::tooltip text="Tooltip on Right" position="right">
                    <x-aura::button variant="secondary" size="sm">Hover Right</x-aura::button>
                </x-aura::tooltip>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::tooltip text="Tooltip on Top" position="top">
    <x-aura::button variant="secondary">Hover Top</x-aura::button>
</x-aura::tooltip>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Tooltips on Action Buttons -->
    <x-aura::code class="w-full" title="2. Tooltips on Icon Actions">
        <x-slot:preview>
            <div class="flex items-center gap-3 py-4 justify-center">
                <x-aura::tooltip text="Edit Document" position="top">
                    <x-aura::icon-button icon="pencil" variant="secondary" size="md" />
                </x-aura::tooltip>

                <x-aura::tooltip text="Delete Permanently" position="top">
                    <x-aura::icon-button icon="trash-2" variant="danger" size="md" />
                </x-aura::tooltip>

                <x-aura::tooltip text="Share via Link" position="top">
                    <x-aura::icon-button icon="share-2" variant="secondary" size="md" />
                </x-aura::tooltip>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::tooltip text="Edit Document" position="top">
    <x-aura::icon-button icon="pencil" variant="secondary" />
</x-aura::tooltip>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
