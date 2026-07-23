<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Text Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Text Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::text&gt;</code>
        </p>
    </div>

    <!-- Sizes & Variants -->
    <section class="space-y-4">
        <h2 class="text-xl font-bold text-zinc-900 dark:text-white">Sizes & Variants</h2>
        <x-aura::code title="Text Options">
            <x-slot:preview>
                <div class="space-y-3 w-full">
                    <x-aura::text size="lg" variant="default">Default Large Text</x-aura::text>
                    <x-aura::text size="md" variant="subtle">Subtle Paragraph Text</x-aura::text>
                    <x-aura::text size="sm" variant="accent">Accent Colored Text</x-aura::text>
                    <x-aura::text size="sm" variant="positive">Positive Status Text</x-aura::text>
                    <x-aura::text size="sm" variant="danger">Danger Error Text</x-aura::text>
                    <x-aura::text size="xs" variant="mono">Monospace Code String</x-aura::text>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::text size="lg" variant="default"&gt;Default Large Text&lt;/x-aura::text&gt;
&lt;x-aura::text size="md" variant="subtle"&gt;Subtle Paragraph Text&lt;/x-aura::text&gt;
&lt;x-aura::text size="sm" variant="accent"&gt;Accent Colored Text&lt;/x-aura::text&gt;
&lt;x-aura::text size="xs" variant="mono"&gt;Monospace Code String&lt;/x-aura::text&gt;</x-slot:codeSlot>
        </x-aura::code>
    </section>
</div>
