<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Separator — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Separator</x-aura::heading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">
                &lt;x-aura::separator&gt;
            </code>
        </div>
    </div>

    <!-- Divider Showcase -->
    <x-aura::code class="w-full" title="Divider Separator">
            <x-slot:preview>
                <div class="w-full max-w-lg space-y-4 py-2">
                    <x-aura::text size="sm" class="text-zinc-500">Top Content Section</x-aura::text>
                    <x-aura::separator label="OR" />
                    <x-aura::text size="sm" class="text-zinc-500">Bottom Content Section</x-aura::text>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::text size="sm"&gt;Top Content Section&lt;/x-aura::text&gt;
&lt;x-aura::separator label="OR" /&gt;
&lt;x-aura::text size="sm"&gt;Bottom Content Section&lt;/x-aura::text&gt;</x-slot:codeSlot>
        </x-aura::code>
    

    <!-- Plain Line Separator -->
    <x-aura::code class="w-full" title="Plain Separator">
            <x-slot:preview>
                <div class="w-full max-w-lg space-y-4 py-2">
                    <x-aura::text size="sm" class="text-zinc-500">Section A</x-aura::text>
                    <x-aura::separator />
                    <x-aura::text size="sm" class="text-zinc-500">Section B</x-aura::text>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::text size="sm"&gt;Section A&lt;/x-aura::text&gt;
&lt;x-aura::separator /&gt;
&lt;x-aura::text size="sm"&gt;Section B&lt;/x-aura::text&gt;</x-slot:codeSlot>
        </x-aura::code>
    
</div>
