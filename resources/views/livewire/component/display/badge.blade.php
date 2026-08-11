<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Badge - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Badge</x-aura::heading>
            <x-aura::subheading size="md">
                Compact status pills and indicators for metadata, order states, role tags, and metric notifications.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::badge variant="positive" size="sm"&gt;Active&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Color Variants -->
    <x-aura::code class="w-full" title="1. Color & Intent Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::badge variant="neutral">Neutral</x-aura::badge>
                <x-aura::badge variant="subtle">Subtle</x-aura::badge>
                <x-aura::badge variant="positive">Completed</x-aura::badge>
                <x-aura::badge variant="warning">Pending Review</x-aura::badge>
                <x-aura::badge variant="negative">Failed</x-aura::badge>
                <x-aura::badge variant="info">In Progress</x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge variant="neutral"&gt;Neutral&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="positive"&gt;Completed&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="warning"&gt;Pending Review&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="negative"&gt;Failed&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Badge Sizes -->
    <x-aura::code class="w-full" title="2. Badge Sizes (sm, md, lg)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::badge variant="positive" size="sm">Small (sm)</x-aura::badge>
                <x-aura::badge variant="positive" size="md">Medium (md)</x-aura::badge>
                <x-aura::badge variant="positive" size="lg">Large (lg)</x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge size="sm"&gt;Small (sm)&lt;/x-aura::badge&gt;
&lt;x-aura::badge size="md"&gt;Medium (md)&lt;/x-aura::badge&gt;
&lt;x-aura::badge size="lg"&gt;Large (lg)&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Badges with Icons -->
    <x-aura::code class="w-full" title="3. Badges with Icons & Dot Indicators">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::badge variant="positive">
                    <x-slot:icon>
                        <span class="w-2 h-2 rounded-full bg-emerald-500 inline-block"></span>
                    </x-slot:icon>
                    System Operational
                </x-aura::badge>

                <x-aura::badge variant="negative">
                    <x-slot:icon>
                        <span class="w-2 h-2 rounded-full bg-red-500 inline-block"></span>
                    </x-slot:icon>
                    Outage Detected
                </x-aura::badge>

                <x-aura::badge variant="warning">
                    <x-slot:icon>
                        <span class="w-2 h-2 rounded-full bg-amber-500 inline-block"></span>
                    </x-slot:icon>
                    High Load
                </x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge variant="positive"&gt;
    &lt;x-slot:icon&gt;&lt;span class="w-2 h-2 rounded-full bg-emerald-500 inline-block"&gt;&lt;/span&gt;&lt;/x-slot:icon&gt;
    System Operational
&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Real-World Status Table Pattern -->
    <x-aura::code class="w-full" title="4. Real-World Data Table Status Badges">
        <x-slot:preview>
            <div class="w-full space-y-2">
                <div class="p-3 rounded-lg border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/50 flex items-center justify-between">
                    <span class="text-sm font-medium text-zinc-900 dark:text-white">Order #10429</span>
                    <x-aura::badge variant="positive" size="sm">Paid</x-aura::badge>
                </div>
                <div class="p-3 rounded-lg border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/50 flex items-center justify-between">
                    <span class="text-sm font-medium text-zinc-900 dark:text-white">Order #10428</span>
                    <x-aura::badge variant="warning" size="sm">Pending</x-aura::badge>
                </div>
                <div class="p-3 rounded-lg border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/50 flex items-center justify-between">
                    <span class="text-sm font-medium text-zinc-900 dark:text-white">Order #10427</span>
                    <x-aura::badge variant="negative" size="sm">Refunded</x-aura::badge>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge variant="positive" size="sm"&gt;Paid&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="warning" size="sm"&gt;Pending&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="negative" size="sm"&gt;Refunded&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Badge Shapes (Pill & Rounded) -->
    <x-aura::code class="w-full" title="5. Badge Shapes (Pill & Rounded)">
        <x-slot:preview>
            <div class="flex flex-wrap gap-3 items-center">
                <x-aura::badge pill variant="neutral">Pill Shape (Default)</x-aura::badge>
                <x-aura::badge rounded variant="neutral">Rounded Shape</x-aura::badge>
                <x-aura::badge rounded variant="positive">Paid (Rounded)</x-aura::badge>
                <x-aura::badge rounded variant="negative">Failed (Rounded)</x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Default Pill Shape --&gt;
&lt;x-aura::badge shape="pill" variant="neutral"&gt;Pill Shape&lt;/x-aura::badge&gt;

&lt;!-- Rounded Shape --&gt;
&lt;x-aura::badge rounded variant="positive"&gt;Paid&lt;/x-aura::badge&gt;
&lt;x-aura::badge shape="rounded" variant="negative"&gt;Failed&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
