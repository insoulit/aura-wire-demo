<?php

use function Livewire\Volt\{layout, title};

layout('layout.component');
title('Tag - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Feedback & Status</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Tag</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Compact pills with generous horizontal padding for labeling, filtering, categories, and active filters.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::tag&gt;
            </code>
        </div>
    </div>

    <!-- 1. Variants -->
    <x-aura::code class="w-full" title="1. Color Variants">
        <x-slot:preview>
            <div class="flex flex-wrap gap-2.5 items-center">
                <x-aura::tag variant="default">Default Tag</x-aura::tag>
                <x-aura::tag variant="primary">Primary</x-aura::tag>
                <x-aura::tag variant="success">Success</x-aura::tag>
                <x-aura::tag variant="warning">Warning</x-aura::tag>
                <x-aura::tag variant="danger">Danger</x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::tag variant="default"&gt;Default Tag&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="primary"&gt;Primary&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="success"&gt;Success&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="warning"&gt;Warning&lt;/x-aura::tag&gt;
&lt;x-aura::tag variant="danger"&gt;Danger&lt;/x-aura::tag&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code class="w-full" title="2. Sizes (with Enhanced X-Axis Padding)">
        <x-slot:preview>
            <div class="flex flex-wrap gap-3 items-center">
                <x-aura::tag size="sm" variant="primary">Small (sm: px-3)</x-aura::tag>
                <x-aura::tag size="md" variant="primary">Medium (md: px-3.5)</x-aura::tag>
                <x-aura::tag size="lg" variant="primary">Large (lg: px-4)</x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::tag size="sm" variant="primary"&gt;Small (sm)&lt;/x-aura::tag&gt;
&lt;x-aura::tag size="md" variant="primary"&gt;Medium (md)&lt;/x-aura::tag&gt;
&lt;x-aura::tag size="lg" variant="primary"&gt;Large (lg)&lt;/x-aura::tag&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Removable / Filter Tags -->
    <x-aura::code class="w-full" title="3. Removable Active Filter Tags">
        <x-slot:preview>
            <div class="flex flex-wrap gap-2.5 items-center">
                <x-aura::tag variant="default" class="gap-1.5 pr-2">
                    <span>Category: Design</span>
                    <button type="button" class="hover:bg-zinc-200 dark:hover:bg-zinc-700 rounded-full p-0.5"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </x-aura::tag>

                <x-aura::tag variant="primary" class="gap-1.5 pr-2">
                    <span>Framework: Laravel</span>
                    <button type="button" class="hover:bg-zinc-700 dark:hover:bg-zinc-200 rounded-full p-0.5"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </x-aura::tag>

                <x-aura::tag variant="success" class="gap-1.5 pr-2">
                    <span>Status: Published</span>
                    <button type="button" class="hover:bg-emerald-200 dark:hover:bg-emerald-900 rounded-full p-0.5"><svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::tag variant="primary" class="gap-1.5 pr-2"&gt;
    &lt;span&gt;Framework: Laravel&lt;/span&gt;
    &lt;button type="button" class="hover:bg-zinc-700 rounded-full p-0.5"&gt;
        &lt;svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"&gt;&lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/&gt;&lt;/svg&gt;
    &lt;/button&gt;
&lt;/x-aura::tag&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Shapes (Pill & Rounded) -->
    <x-aura::code class="w-full" title="4. Tag Shapes (Pill & Rounded)">
        <x-slot:preview>
            <div class="flex flex-wrap gap-3 items-center">
                <x-aura::tag pill variant="primary">Pill Shape (Default)</x-aura::tag>
                <x-aura::tag rounded variant="primary">Rounded Shape</x-aura::tag>
                <x-aura::tag rounded variant="success">Rounded Success</x-aura::tag>
                <x-aura::tag rounded variant="warning">Rounded Warning</x-aura::tag>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Default Pill Shape --&gt;
&lt;x-aura::tag shape="pill" variant="primary"&gt;Pill Shape&lt;/x-aura::tag&gt;

&lt;!-- Rounded Shape --&gt;
&lt;x-aura::tag rounded variant="primary"&gt;Rounded Shape&lt;/x-aura::tag&gt;
&lt;x-aura::tag shape="rounded" variant="success"&gt;Rounded Success&lt;/x-aura::tag&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
