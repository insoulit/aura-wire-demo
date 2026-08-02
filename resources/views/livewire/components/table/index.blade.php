<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Table — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Table</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::table&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Data Table">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot name="header">
                        <x-aura::table.column>Name</x-aura::table.column>
                        <x-aura::table.column>Role</x-aura::table.column>
                        <x-aura::table.column>Status</x-aura::table.column>
                    </x-slot>
                    <x-aura::table.row>
                        <x-aura::table.cell class="font-medium">Alex Rivers</x-aura::table.cell>
                        <x-aura::table.cell>Administrator</x-aura::table.cell>
                        <x-aura::table.cell><x-aura::badge variant="positive">Active</x-aura::badge></x-aura::table.cell>
                    </x-aura::table.row>
                    <x-aura::table.row>
                        <x-aura::table.cell class="font-medium">Sarah Chen</x-aura::table.cell>
                        <x-aura::table.cell>Developer</x-aura::table.cell>
                        <x-aura::table.cell><x-aura::badge variant="subtle">Offline</x-aura::badge></x-aura::table.cell>
                    </x-aura::table.row>
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::table&gt;
    &amp;lt;x-slot name="header"&amp;gt;
        &lt;x-aura::table.column&gt;Name&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Role&lt;/x-aura::table.column&gt;
    &amp;lt;/x-slot&amp;gt;
    &lt;x-aura::table.row&gt;
        &lt;x-aura::table.cell&gt;Alex Rivers&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;Administrator&lt;/x-aura::table.cell&gt;
    &lt;/x-aura::table.row&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
