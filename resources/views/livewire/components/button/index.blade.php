<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Button — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Button</x-aura::heading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">
                &lt;x-aura::button&gt;
            </code>
        </div>
    </div>

    <!-- Variants -->
    <x-aura::code class="w-full" title="Button Variants">
            <x-slot:preview>
                <div class="flex flex-wrap items-center gap-3">
                    <x-aura::button variant="primary">Primary</x-aura::button>
                    <x-aura::button variant="secondary">Secondary</x-aura::button>
                    <x-aura::button variant="subtle">Subtle</x-aura::button>
                    <x-aura::button variant="outline">Outline</x-aura::button>
                    <x-aura::button variant="ghost">Ghost</x-aura::button>
                    <x-aura::button variant="danger">Danger</x-aura::button>
                    <x-aura::button variant="link" href="#">Link</x-aura::button>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Primary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="secondary"&gt;Secondary&lt;/x-aura::button&gt;
&lt;x-aura::button variant="subtle"&gt;Subtle&lt;/x-aura::button&gt;
&lt;x-aura::button variant="outline"&gt;Outline&lt;/x-aura::button&gt;
&lt;x-aura::button variant="ghost"&gt;Ghost&lt;/x-aura::button&gt;
&lt;x-aura::button variant="danger"&gt;Danger&lt;/x-aura::button&gt;
&lt;x-aura::button variant="link" href="#"&gt;Link&lt;/x-aura::button&gt;</x-slot:codeSlot>
        </x-aura::code>
    

    <!-- Sizes -->
    <x-aura::code class="w-full" title="Button Sizes">
            <x-slot:preview>
                <div class="flex flex-wrap items-center gap-3">
                    <x-aura::button variant="primary" size="xs">Extra Small (xs)</x-aura::button>
                    <x-aura::button variant="primary" size="sm">Small (sm)</x-aura::button>
                    <x-aura::button variant="primary" size="md">Medium (md)</x-aura::button>
                    <x-aura::button variant="primary" size="lg">Large (lg)</x-aura::button>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::button size="xs"&gt;Extra Small (xs)&lt;/x-aura::button&gt;
&lt;x-aura::button size="sm"&gt;Small (sm)&lt;/x-aura::button&gt;
&lt;x-aura::button size="md"&gt;Medium (md)&lt;/x-aura::button&gt;
&lt;x-aura::button size="lg"&gt;Large (lg)&lt;/x-aura::button&gt;</x-slot:codeSlot>
        </x-aura::code>
    
</div>
