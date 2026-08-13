<?php

use function Livewire\Volt\{layout, title, state};

layout('livewire.layout.component');
title('Rich Text - Aura Wire');

state([
    'content' => '<h3>Welcome to Aura Wire Rich Text</h3><p>This is a <strong>rich text editor</strong> built directly into the component package. It supports <em>formatting</em>, lists, headings, blockquotes, and links with <code>wire:model</code> reactivity!</p><ul><li>Zero external dependencies</li><li>Full dark mode support</li><li>Seamless Livewire &amp; Alpine.js integration</li></ul>',
    'compactContent' => '<p>Quick feedback or comment here...</p>',
]);

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Rich Text Editor</x-aura::heading>
            <x-aura::subheading size="md">
                WYSIWYG rich text editor component with interactive formatting toolbar, live HTML output, Livewire entangle reactivity, and word counter.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::rich-text wire:model="content" label="Article Body" placeholder="Write content..." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Interactive Livewire Bindings -->
    <x-aura::code  title="1. Interactive Livewire Model Binding">
        <x-slot:preview>
            <div class="w-full space-y-4">
                <x-aura::field label="Article Body" hint="Format article content using the rich text toolbar">
                    <x-aura::rich-text wire:model="content" placeholder="Start typing article..." :showCount="true" minHeight="200px" />
                </x-aura::field>

                <!-- HTML Output Preview -->
                <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider">Live Bound HTML Output</span>
                        <x-aura::badge variant="neutral" size="sm">Reactive Output</x-aura::badge>
                    </div>
                    <div class="p-3 rounded-lg bg-white dark:bg-zinc-950 border border-zinc-200 dark:border-zinc-800 text-xs font-mono text-zinc-700 dark:text-zinc-300 overflow-x-auto max-h-40">
                        {{ $content }}
                    </div>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::field label="Article Body">
    <x-aura::rich-text wire:model="content" placeholder="Start typing..." :showCount="true" minHeight="200px" />
</x-aura::field>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Toolbar Variants & Compact Mode -->
    <x-aura::code  title="2. Compact Toolbar Mode">
        <x-slot:preview>
            <div class="w-full space-y-4">
                <x-aura::field label="Quick Comment" hint="Simplified toolbar for comments and quick notes">
                    <x-aura::rich-text wire:model="compactContent" toolbar="compact" minHeight="120px" placeholder="Write a comment..." />
                </x-aura::field>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::rich-text wire:model="comment" toolbar="compact" minHeight="120px" placeholder="Write a comment..." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Validation Error & Disabled States -->
    <x-aura::code  title="3. Validation Error & Disabled States">
        <x-slot:preview>
            <div class="w-full space-y-6">
                <x-aura::field label="Description with Validation Error" error="The description field is required.">
                    <x-aura::rich-text value="" :invalid="true" placeholder="Field with validation error state..." />
                </x-aura::field>

                <x-aura::field label="Read-only / Disabled Editor">
                    <x-aura::rich-text value="<p>This editor content is <strong>disabled</strong> and locked from user editing.</p>" :disabled="true" minHeight="100px" />
                </x-aura::field>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Invalid state -->
<x-aura::rich-text :invalid="true" />

<!-- Disabled state -->
<x-aura::rich-text :disabled="true" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
