<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Sheet Drawer — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Sheet Drawer</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::sheet&gt;</code>
    </div>

    {{-- Sheet Drawer Interactive Demo --}}
    <x-aura::code class="w-full" title="Slide-Out Sheet Drawer">
        <x-slot:preview>
            <div class="flex flex-wrap gap-4">
                <x-aura::button
                    variant="primary"
                    x-data
                    @click="$dispatch('open-sheet', 'demo-sheet-right')"
                >
                    Open Right Sheet Drawer
                </x-aura::button>

                <x-aura::button
                    variant="secondary"
                    x-data
                    @click="$dispatch('open-sheet', 'demo-sheet-left')"
                >
                    Open Left Sheet Drawer
                </x-aura::button>

                {{-- Right Sheet Drawer --}}
                <x-aura::sheet name="demo-sheet-right" side="right" maxW="max-w-md">
                    <x-aura::heading level="2" size="md">Filter Options</x-aura::heading>
                    <x-aura::text size="sm" class="mt-1 mb-6">Configure your view filters below.</x-aura::text>

                    <div class="space-y-3">
                        <x-aura::field label="Category">
                            <x-aura::select>
                                <option>All Categories</option>
                                <option>Components</option>
                                <option>Layouts</option>
                            </x-aura::select>
                        </x-aura::field>

                        <x-aura::field label="Sort By">
                            <x-aura::select>
                                <option>Newest First</option>
                                <option>Alphabetical</option>
                            </x-aura::select>
                        </x-aura::field>
                    </div>

                    <div class="mt-8 flex justify-end gap-2">
                        <x-aura::button variant="secondary" size="sm" x-data @click="$dispatch('close-sheet', 'demo-sheet-right')">Cancel</x-aura::button>
                        <x-aura::button variant="primary" size="sm" x-data @click="$dispatch('close-sheet', 'demo-sheet-right')">Apply Filters</x-aura::button>
                    </div>
                </x-aura::sheet>

                {{-- Left Sheet Drawer --}}
                <x-aura::sheet name="demo-sheet-left" side="left" maxW="max-w-xs">
                    <x-aura::heading level="2" size="md">Navigation Panel</x-aura::heading>
                    <x-aura::text size="sm" class="mt-1 mb-6">Quick links navigation.</x-aura::text>

                    <ul class="space-y-2 text-sm font-medium">
                        <li><a href="/components" class="block p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">Overview</a></li>
                        <li><a href="/components/button" class="block p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">Buttons</a></li>
                        <li><a href="/components/input" class="block p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800">Inputs</a></li>
                    </ul>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Trigger --&gt;
&lt;x-aura::button x-data @click="$dispatch('open-sheet', 'demo-sheet')"&gt;
    Open Sheet Drawer
&lt;/x-aura::button&gt;

&lt;!-- Sheet Component --&gt;
&lt;x-aura::sheet name="demo-sheet" side="right" maxW="max-w-md"&gt;
    &lt;x-aura::heading level="2" size="md"&gt;Filter Options&lt;/x-aura::heading&gt;
    &lt;x-aura::text size="sm" class="mt-1 mb-6"&gt;Configure your view filters below.&lt;/x-aura::text&gt;
    ...
&lt;/x-aura::sheet&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
