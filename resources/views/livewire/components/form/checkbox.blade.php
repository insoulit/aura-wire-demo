<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Checkbox Component — Aura Wire');

state(['remember' => true]);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Checkbox Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::checkbox&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Checkbox Input">
        <x-slot:preview>
            <div class="flex items-center gap-4">
                <x-aura::checkbox wire:model="remember" label="Remember me on this browser" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::checkbox wire:model="remember" label="Remember me" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
