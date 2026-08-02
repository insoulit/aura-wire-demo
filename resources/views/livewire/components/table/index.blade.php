<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Table Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Table Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::table&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Data Table">
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
