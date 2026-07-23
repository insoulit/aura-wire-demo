<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Radio Component — Aura Wire');

state(['plan' => 'pro']);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Radio Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::radio&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Radio Options">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::radio wire:model="plan" value="free" label="Free Tier" />
                <x-aura::radio wire:model="plan" value="pro" label="Pro Tier ($19/mo)" />
                <x-aura::radio wire:model="plan" value="enterprise" label="Enterprise" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::radio wire:model="plan" value="free" label="Free Tier" /&gt;
&lt;x-aura::radio wire:model="plan" value="pro" label="Pro Tier" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
