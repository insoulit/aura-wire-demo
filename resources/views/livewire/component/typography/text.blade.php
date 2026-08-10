<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Text - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Typography</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Text</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Body typography and paragraph text supporting color variants, font size scales, text weights, and monospace strings.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::text&gt;
            </code>
        </div>
    </div>

    <!-- 1. Text Color Variants -->
    <x-aura::code class="w-full" title="1. Text Color Variants">
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
        <x-slot:codeSlot>&lt;x-aura::text variant="default"&gt;Default Primary Body Text&lt;/x-aura::text&gt;
&lt;x-aura::text variant="subtle"&gt;Subtle Secondary Description Text&lt;/x-aura::text&gt;
&lt;x-aura::text variant="accent"&gt;Accent Colored Highlight Text&lt;/x-aura::text&gt;
&lt;x-aura::text variant="positive"&gt;Positive Success State Text&lt;/x-aura::text&gt;
&lt;x-aura::text variant="danger"&gt;Danger Error Alert Text&lt;/x-aura::text&gt;
&lt;x-aura::text variant="mono"&gt;Monospace System String&lt;/x-aura::text&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Text Sizes (xs, sm, md, lg) -->
    <x-aura::code class="w-full" title="2. Text Size Scales (xs, sm, md, lg)">
        <x-slot:preview>
            <div class="space-y-3 w-full">
                <x-aura::text size="lg">Large Text (18px) — Used for lead paragraphs and hero callouts.</x-aura::text>
                <x-aura::text size="md">Medium Text (16px) — Standard body paragraph default font size.</x-aura::text>
                <x-aura::text size="sm">Small Text (14px) — Form field help hints, labels, and secondary UI metadata.</x-aura::text>
                <x-aura::text size="xs">Extra Small Text (12px) — Micro captions, timestamps, and badge tags.</x-aura::text>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::text size="lg"&gt;Large Text (18px)&lt;/x-aura::text&gt;
&lt;x-aura::text size="md"&gt;Medium Text (16px)&lt;/x-aura::text&gt;
&lt;x-aura::text size="sm"&gt;Small Text (14px)&lt;/x-aura::text&gt;
&lt;x-aura::text size="xs"&gt;Extra Small Text (12px)&lt;/x-aura::text&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Monospace & Code Strings -->
    <x-aura::code class="w-full" title="3. Monospace Code &amp; Key Strings">
        <x-slot:preview>
            <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900 space-y-2 font-mono text-xs w-full">
                <div class="flex items-center justify-between">
                    <x-aura::text variant="mono" size="xs" class="text-zinc-500">API_KEY_SECRET</x-aura::text>
                    <x-aura::text variant="mono" size="xs" class="text-emerald-600 dark:text-emerald-400">sk_live_99f2...x81a</x-aura::text>
                </div>
                <div class="flex items-center justify-between border-t border-zinc-200 dark:border-zinc-800 pt-2">
                    <x-aura::text variant="mono" size="xs" class="text-zinc-500">SHA256_HASH</x-aura::text>
                    <x-aura::text variant="mono" size="xs">e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855</x-aura::text>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::text variant="mono" size="xs"&gt;sk_live_99f2...x81a&lt;/x-aura::text&gt;
&lt;x-aura::text variant="mono" size="xs"&gt;SHA256_HASH&lt;/x-aura::text&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Real-World Article / Paragraph Block -->
    <x-aura::code class="w-full" title="4. Real-World Article Paragraph Block">
        <x-slot:preview>
            <div class="p-6 rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 space-y-2.5 w-full">
                <x-aura::heading level="3" size="sm">Getting Started with Livewire Components</x-aura::heading>
                <x-aura::text size="sm" variant="subtle">
                    Aura Wire components are designed to be completely unstyled and responsive out of the box. By coupling native Blade components with Tailwind CSS v4 design tokens, you can compose rich application interfaces with full accessibility support.
                </x-aura::text>
                <div class="flex items-center gap-3 pt-1">
                    <x-aura::text size="xs" variant="subtle">Published Aug 7, 2026</x-aura::text>
                    <span class="text-zinc-400 text-xs">•</span>
                    <x-aura::text size="xs" variant="accent">5 min read</x-aura::text>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="3" size="sm"&gt;Getting Started with Livewire Components&lt;/x-aura::heading&gt;
&lt;x-aura::text size="sm" variant="subtle"&gt;
    Aura Wire components are designed to be completely unstyled and responsive out of the box.
&lt;/x-aura::text&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
