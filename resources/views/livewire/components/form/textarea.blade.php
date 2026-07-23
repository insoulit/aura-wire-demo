<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Textarea Component — Aura Wire');

state(['bio' => '']);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Textarea Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::textarea&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Textarea Control">
        <x-slot:preview>
            <div class="w-full max-w-md">
                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::textarea wire:model="bio" rows="4" label="Biography" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
