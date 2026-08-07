<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Field - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Field &amp; Label</x-aura::heading>
        <x-aura::subheading class="max-w-xl">
            Form field wrapper combining labels, mandatory indicators, help hints, and validation message handling.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::field&gt;
            </code>
        </div>
    </div>
    <x-aura::code class="w-full" title="Field Wrapper">
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
