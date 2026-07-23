<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Error Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Error Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::error&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Field Error Message">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::error message="The email field is required." />
                <x-aura::error message="Password must be at least 8 characters." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::error message="The email field is required." /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
