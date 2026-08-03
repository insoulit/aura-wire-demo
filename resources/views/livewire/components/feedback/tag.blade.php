<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Tag - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Tag</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::tag&gt;</code>
    </div>

    {{-- Tag Variants & Sizes --}}
    <x-aura::code class="w-full" title="Tag Badges & Sizes">
        <x-slot:preview>
            <div class="space-y-3">
                <div class="flex flex-wrap gap-2 items-center">
                    <x-aura::tag variant="default">Default Tag</x-aura::tag>
                    <x-aura::tag variant="primary">Primary</x-aura::tag>
                    <x-aura::tag variant="success">Success</x-aura::tag>
                    <x-aura::tag variant="warning">Warning</x-aura::tag>
                    <x-aura::tag variant="danger">Danger</x-aura::tag>
                </div>

                <div class="flex flex-wrap gap-2 items-center pt-2">
                    <x-aura::tag size="sm" variant="primary">Small (sm)</x-aura::tag>
                    <x-aura::tag size="md" variant="primary">Medium (md)</x-aura::tag>
                    <x-aura::tag size="lg" variant="primary">Large (lg)</x-aura::tag>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::tag variant="default"&gt;Default Tag&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="primary"&gt;Primary&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="success"&gt;Success&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="warning"&gt;Warning&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="danger"&gt;Danger&lt;/x-aura::tag&gt;

&lt;x-aura::tag size="sm" variant="primary"&gt;Small (sm)&lt;/x-aura::tag&gt;
&lt;x-aura::tag size="md" variant="primary"&gt;Medium (md)&lt;/x-aura::tag&gt;
&lt;x-aura::tag size="lg" variant="primary"&gt;Large (lg)&lt;/x-aura::tag&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
