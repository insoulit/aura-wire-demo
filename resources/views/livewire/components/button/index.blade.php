<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Button Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::kicker class="text-indigo-600 dark:text-indigo-400 mb-2">Action Component</x-aura::kicker>
        <x-aura::heading level="1" size="xl">Button Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::button&gt;</x-aura::code>
        </x-aura::text>
    </div>

    <!-- Variants -->
    <section class="space-y-4">
        <x-aura::heading level="2" size="lg">Variants</x-aura::heading>
        <x-aura::code title="Button Variants">
            <x-slot:preview>
                <x-aura::button variant="primary">Primary</x-aura::button>
                <x-aura::button variant="secondary">Secondary</x-aura::button>
                <x-aura::button variant="subtle">Subtle</x-aura::button>
                <x-aura::button variant="outline">Outline</x-aura::button>
                <x-aura::button variant="ghost">Ghost</x-aura::button>
                <x-aura::button variant="danger">Danger</x-aura::button>
                <x-aura::button variant="link" href="#">Link</x-aura::button>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Primary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="secondary"&gt;Secondary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="subtle"&gt;Subtle&lt;/x-aura::button&gt;
&lt;x-aura::button variant="outline"&gt;Outline&lt;/x-aura::button&gt;
&lt;x-aura::button variant="ghost"&gt;Ghost&lt;/x-aura::button&gt;
&lt;x-aura::button variant="danger"&gt;Danger&lt;/x-aura::button&gt;
&lt;x-aura::button variant="link" href="#"&gt;Link&lt;/x-aura::button&gt;</x-slot:codeSlot>
        </x-aura::code>
    </section>

    <!-- Sizes -->
    <section class="space-y-4">
        <x-aura::heading level="2" size="lg">Sizes</x-aura::heading>
        <x-aura::code title="Button Sizes">
            <x-slot:preview>
                <x-aura::button variant="primary" size="xs">Extra Small (xs)</x-aura::button>
                <x-aura::button variant="primary" size="sm">Small (sm)</x-aura::button>
                <x-aura::button variant="primary" size="md">Medium (md)</x-aura::button>
                <x-aura::button variant="primary" size="lg">Large (lg)</x-aura::button>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::button size="xs"&gt;Extra Small (xs)&lt;/x-aura::button&gt;
&lt;x-aura::button size="sm"&gt;Small (sm)&lt;/x-aura::button&gt;
&lt;x-aura::button size="md"&gt;Medium (md)&lt;/x-aura::button&gt;
&lt;x-aura::button size="lg"&gt;Large (lg)&lt;/x-aura::button&gt;</x-slot:codeSlot>
        </x-aura::code>
    </section>
</div>
