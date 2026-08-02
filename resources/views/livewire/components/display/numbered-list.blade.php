<?php

use function Livewire\Volt\{layout, title, with};

layout('layouts.components');
title('Numbered List — Aura Wire');

with([
    'steps' => [
        ['title' => 'Install Aura Wire package', 'subtitle' => 'Run composer require insoulit/aura-wire'],
        ['title' => 'Publish configurations & assets', 'subtitle' => 'Execute php artisan aura-wire:install'],
        ['title' => 'Start building Blade & Livewire components', 'subtitle' => 'Use <x-aura::*> tags in your view files'],
    ],
]);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Numbered List</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::numbered-list&gt;</code>
    </div>

    {{-- Numbered List Step Sequence --}}
    <x-aura::code class="w-full" title="Step-by-Step Numbered Cards">
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
