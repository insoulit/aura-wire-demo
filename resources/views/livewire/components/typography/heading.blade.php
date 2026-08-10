<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.components')] 
#[Title('Heading - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Typography Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Heading</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Semantic section headers and display titles supporting multiple levels, size scales, font weights, and layout alignments.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::heading&gt;
            </code>
        </div>
    </div>

    <!-- 1. Heading Levels (H1 - H6) -->
    <x-aura::code class="w-full" title="1. Semantic Heading Levels (H1 to H6)">
        <x-slot:preview>
            <div class="space-y-3 w-full">
                <x-aura::heading level="1" size="xl">Level 1 (H1) Heading</x-aura::heading>
                <x-aura::heading level="2" size="lg">Level 2 (H2) Heading</x-aura::heading>
                <x-aura::heading level="3" size="md">Level 3 (H3) Heading</x-aura::heading>
                <x-aura::heading level="4" size="sm">Level 4 (H4) Heading</x-aura::heading>
                <x-aura::heading level="5" size="xs">Level 5 (H5) Heading</x-aura::heading>
                <x-aura::heading level="6" size="xs">Level 6 (H6) Heading</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="1" size="xl"&gt;Level 1 (H1) Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="2" size="lg"&gt;Level 2 (H2) Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="3" size="md"&gt;Level 3 (H3) Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="4" size="sm"&gt;Level 4 (H4) Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="5" size="xs"&gt;Level 5 (H5) Heading&lt;/x-aura::heading&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Display Title Scales -->
    <x-aura::code class="w-full" title="2. Display Title Scales for Hero Sections">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::heading level="1" size="display-2xl">Display 2XL Title</x-aura::heading>
                <x-aura::heading level="1" size="display-xl">Display XL Title</x-aura::heading>
                <x-aura::heading level="1" size="display-lg">Display Large Title</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="1" size="display-2xl"&gt;Display 2XL Title&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="1" size="display-xl"&gt;Display XL Title&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="1" size="display-lg"&gt;Display Large Title&lt;/x-aura::heading&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Font Weights -->
    <x-aura::code class="w-full" title="3. Custom Font Weights">
        <x-slot:preview>
            <div class="space-y-2 w-full">
                <x-aura::heading level="2" size="md" weight="normal">Normal Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="medium">Medium Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="semibold">Semibold Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="bold">Bold Weight Heading</x-aura::heading>
                <x-aura::heading level="2" size="md" weight="extrabold">Extrabold Weight Heading</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="2" size="md" weight="normal"&gt;Normal Weight&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="2" size="md" weight="semibold"&gt;Semibold Weight&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="2" size="md" weight="extrabold"&gt;Extrabold Weight&lt;/x-aura::heading&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Real-World Dashboard Header Pattern -->
    <x-aura::code class="w-full" title="4. Real-World Dashboard Section Header">
        <x-slot:preview>
            <div class="p-6 rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 flex flex-col sm:flex-row sm:items-center justify-between gap-4 w-full">
                <div class="space-y-1">
                    <x-aura::heading level="2" size="md">Project Settings &amp; Security</x-aura::heading>
                    <x-aura::subheading class="text-sm">Manage API tokens, environment keys, and deployment webhooks.</x-aura::subheading>
                </div>
                <div class="flex items-center gap-2">
                    <x-aura::button variant="secondary" size="sm">Audit Log</x-aura::button>
                    <x-aura::button variant="primary" size="sm" icon="plus">New API Key</x-aura::button>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;div class="flex items-center justify-between gap-4"&gt;
    &lt;div class="space-y-1"&gt;
        &lt;x-aura::heading level="2" size="md"&gt;Project Settings &amp;amp; Security&lt;/x-aura::heading&gt;
        &lt;x-aura::subheading class="text-sm"&gt;Manage API tokens and deployment webhooks.&lt;/x-aura::subheading&gt;
    &lt;/div&gt;
    &lt;x-aura::button variant="primary" size="sm" icon="plus"&gt;New API Key&lt;/x-aura::button&gt;
&lt;/div&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
