<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Text - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Typography</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Text</x-aura::heading>
            <x-aura::subheading size="md">
                Body typography and paragraph text supporting color variants, font size scales, text weights, and monospace strings.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::text size="sm" variant="subtle">Paragraph body content.</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Text Color Variants -->
    <x-aura::code  title="1. Text Color Variants">
        <x-slot:preview>
            <div class="space-y-2.5 w-full">
                <x-aura::text size="md" variant="default">Default Primary Body Text</x-aura::text>
                <x-aura::text size="md" variant="subtle">Subtle Secondary Description Text</x-aura::text>
                <x-aura::text size="md" variant="accent">Accent Colored Highlight Text</x-aura::text>
                <x-aura::text size="md" variant="positive">Positive Success State Text</x-aura::text>
                <x-aura::text size="md" variant="danger">Danger Error Alert Text</x-aura::text>
                <x-aura::text size="sm" variant="mono">Monospace System String</x-aura::text>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::text variant="default">Default Primary Body Text</x-aura::text>
<x-aura::text variant="subtle">Subtle Secondary Description Text</x-aura::text>
<x-aura::text variant="accent">Accent Colored Highlight Text</x-aura::text>
<x-aura::text variant="positive">Positive Success State Text</x-aura::text>
<x-aura::text variant="danger">Danger Error Alert Text</x-aura::text>
<x-aura::text variant="mono">Monospace System String</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Text Sizes (xs, sm, md, lg) -->
    <x-aura::code  title="2. Text Size Scales (xs, sm, md, lg)">
        <x-slot:preview>
            <div class="space-y-3 w-full">
                <x-aura::text size="lg">Large Text (18px) — Used for lead paragraphs and hero callouts.</x-aura::text>
                <x-aura::text size="md">Medium Text (16px) — Standard body paragraph default font size.</x-aura::text>
                <x-aura::text size="sm">Small Text (14px) — Form field help hints, labels, and secondary UI metadata.</x-aura::text>
                <x-aura::text size="xs">Extra Small Text (12px) — Micro captions, timestamps, and badge tags.</x-aura::text>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::text size="lg">Large Text (18px)</x-aura::text>
<x-aura::text size="md">Medium Text (16px)</x-aura::text>
<x-aura::text size="sm">Small Text (14px)</x-aura::text>
<x-aura::text size="xs">Extra Small Text (12px)</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Monospace & Code Strings -->
    <x-aura::code  title="3. Monospace Code &amp; Key Strings">
        <x-slot:preview>
            <x-aura::card class="p-4 space-y-2 font-mono text-xs w-full">
                <div class="flex items-center justify-between">
                    <x-aura::text variant="mono" size="xs" class="text-zinc-500">API_KEY_SECRET</x-aura::text>
                    <x-aura::text variant="mono" size="xs" class="text-emerald-600 dark:text-emerald-400">sk_live_99f2...x81a</x-aura::text>
                </div>
                <div class="flex items-center justify-between border-t border-zinc-200 dark:border-zinc-800 pt-2">
                    <x-aura::text variant="mono" size="xs" class="text-zinc-500">SHA256_HASH</x-aura::text>
                    <x-aura::text variant="mono" size="xs">e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855</x-aura::text>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::text variant="mono" size="xs">sk_live_99f2...x81a</x-aura::text>
<x-aura::text variant="mono" size="xs">SHA256_HASH</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Real-World Article / Paragraph Block -->
    <x-aura::code  title="4. Real-World Article Paragraph Block">
        <x-slot:preview>
            <x-aura::card class="p-6 space-y-2.5 w-full">
                <x-aura::heading level="3" size="sm">Getting Started with Livewire Components</x-aura::heading>
                <x-aura::text size="sm" variant="subtle">
                    Aura Wire components are designed to be completely unstyled and responsive out of the box. By coupling native Blade components with Tailwind CSS v4 design tokens, you can compose rich application interfaces with full accessibility support.
                </x-aura::text>
                <div class="flex items-center gap-3 pt-1">
                    <x-aura::text size="xs" variant="subtle">Published Aug 7, 2026</x-aura::text>
                    <span class="text-zinc-400 text-xs">•</span>
                    <x-aura::text size="xs" variant="accent">5 min read</x-aura::text>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::heading level="3" size="sm">Getting Started with Livewire Components</x-aura::heading>
<x-aura::text size="sm" variant="subtle">
    Aura Wire components are designed to be completely unstyled and responsive out of the box.
</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
