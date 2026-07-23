<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Toast Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Toast Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::toast&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Toast Notification">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::toast type="success" title="Settings Saved" message="Your account preferences have been updated." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::toast type="success" title="Settings Saved" message="Preferences updated." /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
