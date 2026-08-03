<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Text - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Text</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::text&gt;</code>
    </div>

    <!-- Sizes & Variants -->
    <x-aura::code class="w-full" title="Text Options">
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
    
</div>
