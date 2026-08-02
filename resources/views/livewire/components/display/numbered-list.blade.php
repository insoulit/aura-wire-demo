<?php

use function Livewire\Volt\{layout, title, with};

layout('layouts.components');
title('Numbered List Component — Aura Wire');

with([
    'steps' => [
        ['title' => 'Install Aura Wire package', 'subtitle' => 'Run composer require insoulit/aura-wire'],
        ['title' => 'Publish configurations & assets', 'subtitle' => 'Execute php artisan aura-wire:install'],
        ['title' => 'Start building Blade & Livewire components', 'subtitle' => 'Use <x-aura::*> tags in your view files'],
    ],
]);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Numbered List Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::numbered-list&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Numbered List Step Sequence --}}
    <x-aura::code title="Step-by-Step Numbered Cards">
        <x-slot:preview>
            <div class="w-full max-w-xl">
                <x-aura::numbered-list :items="$steps" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::numbered-list :items="[
    ['title' =&gt; 'Install Aura Wire package', 'subtitle' =&gt; 'Run composer require insoulit/aura-wire'],
    ['title' =&gt; 'Publish configurations & assets', 'subtitle' =&gt; 'Execute php artisan aura-wire:install'],
    ['title' =&gt; 'Start building Blade & Livewire components', 'subtitle' =&gt; 'Use &lt;x-aura::*&gt; tags in your view files'],
]" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
