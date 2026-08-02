<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Tag Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Tag Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::tag&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Tag Variants & Sizes --}}
    <x-aura::code title="Tag Badges & Sizes">
        <x-slot:preview>
            <div class="space-y-4">
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
