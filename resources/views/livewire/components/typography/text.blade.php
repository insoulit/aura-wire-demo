<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Text Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Text Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::text&gt;</x-aura::code>
        </x-aura::text>
    </div>

    <!-- Sizes & Variants -->
    <section class="space-y-4">
        <x-aura::heading level="2" size="lg">Sizes &amp; Variants</x-aura::heading>
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
