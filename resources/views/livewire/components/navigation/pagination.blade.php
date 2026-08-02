<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Pagination Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Pagination Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::pagination&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Custom Pagination Navigation Bar --}}
    <x-aura::code title="Pagination Navigation Bar">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::pagination>
                    <div class="flex items-center justify-between w-full">
                        <x-aura::text size="xs" class="text-zinc-500">Showing 1 to 10 of 48 results</x-aura::text>
                        <div class="flex items-center gap-2">
                            <x-aura::button variant="secondary" size="xs" disabled>Previous</x-aura::button>
                            <x-aura::button variant="secondary" size="xs">Next</x-aura::button>
                        </div>
                    </div>
                </x-aura::pagination>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::pagination&gt;
    &lt;div class="flex items-center justify-between w-full"&gt;
        &lt;x-aura::text size="xs" class="text-zinc-500"&gt;Showing 1 to 10 of 48 results&lt;/x-aura::text&gt;
        &lt;div class="flex items-center gap-2"&gt;
            &lt;x-aura::button variant="secondary" size="xs" disabled&gt;Previous&lt;/x-aura::button&gt;
            &lt;x-aura::button variant="secondary" size="xs"&gt;Next&lt;/x-aura::button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-aura::pagination&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
