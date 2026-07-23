<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Label Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Label Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::label&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Form Label">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::label required>Email Address</x-aura::label>
                <x-aura::label>Optional Nickname</x-aura::label>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::label required&gt;Email Address&lt;/x-aura::label&gt;
&lt;x-aura::label&gt;Optional Nickname&lt;/x-aura::label&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
