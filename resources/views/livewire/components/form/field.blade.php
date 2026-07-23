<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Field Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Field &amp; Label Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::field&gt;</x-aura::code> &amp; <x-aura::code>&lt;x-aura::label&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Field Wrapper">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::field label="Username" hint="Enter a unique handle" required>
                    <x-aura::input placeholder="johndoe" />
                </x-aura::field>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::field label="Username" hint="Enter a unique handle" required&gt;
    &lt;x-aura::input placeholder="johndoe" /&gt;
&lt;/x-aura::field&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
