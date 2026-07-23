<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Switch Component — Aura Wire');

state(['enabled' => false]);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Switch Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::switch&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Toggle Switch">
        <x-slot:preview>
            <div class="flex items-center gap-4">
                <x-aura::switch wire:model="enabled" label="Enable Notifications" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::switch wire:model="enabled" label="Enable Notifications" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
