<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Tooltip - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Overlay</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Tooltip</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Hover and focus popover tooltips with directional placement options.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::tooltip&gt;
            </code>
        </div>
    </div>

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
        <x-slot:codeSlot>&lt;x-aura::tooltip text="Tooltip on Top" position="top"&gt;
    &lt;x-aura::button variant="secondary"&gt;Hover Top&lt;/x-aura::button&gt;
&lt;/x-aura::tooltip&gt;</x-slot:codeSlot>
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
        <x-slot:codeSlot>&lt;x-aura::tooltip text="Edit Document" position="top"&gt;
    &lt;x-aura::icon-button icon="pencil" variant="secondary" /&gt;
&lt;/x-aura::tooltip&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
