<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Pagination — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Pagination</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::pagination&gt;</code>
    </div>

    {{-- Custom Pagination Navigation Bar --}}
    <x-aura::code class="w-full" title="Pagination Navigation Bar">
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
