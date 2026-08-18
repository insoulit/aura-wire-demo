<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Text — Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">

    <!-- Header -->
    <x-aura::card>

        <x-aura::flex direction="col" gap="2" class="max-w-2xl">

            <x-aura::flex align="center" gap="2.5">

                <x-aura::kicker>Typography</x-aura::kicker>

                <x-aura::badge variant="subtle" size="md">Component</x-aura::badge>

            </x-aura::flex>

            <x-aura::heading level="1" size="xl">Text</x-aura::heading>

            <x-aura::subheading size="md">
                Versatile body typography component supporting semantic color variants, font size scales, custom weights, line clamping, and monospace strings.
            </x-aura::subheading>

        </x-aura::flex>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>@verbatim<x-aura::text size="sm" variant="default" weight="normal">Body paragraph content.</x-aura::text>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Text Color Variants -->
    <x-aura::code title="1. Text Color Variants">

        <x-slot:preview>

            <div class="space-y-3 w-full">

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="neutral" size="md">default</x-aura::badge>

                    <x-aura::text size="sm" variant="default">Default Primary Body Text</x-aura::text>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="subtle" size="md">subtle</x-aura::badge>

                    <x-aura::text size="sm" variant="subtle">Subtle Secondary Description Text</x-aura::text>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="subtle" size="md">accent</x-aura::badge>

                    <x-aura::text size="sm" variant="accent">Accent Colored Highlight Text</x-aura::text>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="subtle" size="md">primary</x-aura::badge>

                    <x-aura::text size="sm" variant="primary">Primary Brand Indigo Text</x-aura::text>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="positive" size="md">positive</x-aura::badge>

                    <x-aura::text size="sm" variant="positive">Positive Success State Confirmation</x-aura::text>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="warning" size="md">warning</x-aura::badge>

                    <x-aura::text size="sm" variant="warning">Warning Cautionary Notice Message</x-aura::text>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="danger" size="md">danger</x-aura::badge>

                    <x-aura::text size="sm" variant="danger">Danger Error Alert Notification</x-aura::text>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="neutral" size="md">mono</x-aura::badge>

                    <x-aura::text size="sm" variant="mono">Monospace System Log and Key String</x-aura::text>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::text variant="default">Default Primary Body Text</x-aura::text>

<x-aura::text variant="subtle">Subtle Secondary Description Text</x-aura::text>

<x-aura::text variant="accent">Accent Colored Highlight Text</x-aura::text>

<x-aura::text variant="primary">Primary Brand Indigo Text</x-aura::text>

<x-aura::text variant="positive">Positive Success State Confirmation</x-aura::text>

<x-aura::text variant="warning">Warning Cautionary Notice Message</x-aura::text>

<x-aura::text variant="danger">Danger Error Alert Notification</x-aura::text>

<x-aura::text variant="mono">Monospace System Log and Key String</x-aura::text>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Text Sizes (2xl, xl, lg, md, sm, xs, 2xs) -->
    <x-aura::code title="2. Text Size Scales">

        <x-slot:preview>

            <div class="space-y-4 w-full">

                <div class="space-y-1">

                    <x-aura::badge variant="subtle" size="md">size="2xl"</x-aura::badge>

                    <x-aura::text size="2xl">2XL Text — Extra large high emphasis lead intro paragraph.</x-aura::text>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="xl"</x-aura::badge>

                    <x-aura::text size="xl">XL Text — Large intro summaries and featured highlights.</x-aura::text>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="lg"</x-aura::badge>

                    <x-aura::text size="lg">Large Text — Section lead paragraphs and sub headlines.</x-aura::text>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="md"</x-aura::badge>

                    <x-aura::text size="md">Medium Text — Standard 16px body paragraph font size.</x-aura::text>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="sm" (Default)</x-aura::badge>

                    <x-aura::text size="sm">Small Text — 14px default body font size for cards, forms, and lists.</x-aura::text>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="xs"</x-aura::badge>

                    <x-aura::text size="xs">Extra Small Text — 12px secondary metadata, timestamps, and captions.</x-aura::text>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="2xs"</x-aura::badge>

                    <x-aura::text size="2xs">2XS Text — 11px micro labels, badge annotations, and tight tables.</x-aura::text>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::text size="2xl">2XL Text — Extra large high emphasis lead intro.</x-aura::text>

<x-aura::text size="xl">XL Text — Large intro summaries.</x-aura::text>

<x-aura::text size="lg">Large Text — Section lead paragraphs.</x-aura::text>

<x-aura::text size="md">Medium Text — Standard 16px body paragraph.</x-aura::text>

<x-aura::text size="sm">Small Text — 14px default body font size.</x-aura::text>

<x-aura::text size="xs">Extra Small Text — 12px secondary metadata.</x-aura::text>

<x-aura::text size="2xs">2XS Text — 11px micro labels.</x-aura::text>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Font Weights, Clamping & Truncation -->
    <x-aura::code title="3. Font Weights, Clamping, and Truncation">

        <x-slot:preview>

            <div class="space-y-4 w-full">

                <div class="space-y-2">

                    <x-aura::text size="xs" variant="subtle" weight="bold" class="uppercase tracking-wider">Font Weights</x-aura::text>

                    <div class="space-y-1.5">

                        <x-aura::text weight="light">Light Weight Text (300)</x-aura::text>

                        <x-aura::text weight="normal">Normal Weight Text (400)</x-aura::text>

                        <x-aura::text weight="medium">Medium Weight Text (500)</x-aura::text>

                        <x-aura::text weight="semibold">Semibold Weight Text (600)</x-aura::text>

                        <x-aura::text weight="bold">Bold Weight Text (700)</x-aura::text>

                        <x-aura::text weight="extrabold">Extrabold Weight Text (800)</x-aura::text>

                        <x-aura::text weight="black">Black Weight Text (900)</x-aura::text>

                    </div>

                </div>

                <div class="space-y-2 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::text size="xs" variant="subtle" weight="bold" class="uppercase tracking-wider">Line Clamping (clamp prop)</x-aura::text>

                    <div class="max-w-md p-3 rounded-lg bg-zinc-100 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/60">

                        <x-aura::text size="sm" :clamp="2">
                            Aura Wire is a comprehensive UI design system built for modern Laravel and Livewire applications. It provides production grade Blade components, accessible form primitives, customizable overlays, interactive data displays, and polished documentation templates.
                        </x-aura::text>

                    </div>

                </div>

                <div class="space-y-2 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::text size="xs" variant="subtle" weight="bold" class="uppercase tracking-wider">Single Line Truncation (truncate prop)</x-aura::text>

                    <div class="max-w-xs p-3 rounded-lg bg-zinc-100 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/60">

                        <x-aura::text size="sm" :truncate="true">
                            This is a very long single line paragraph that will automatically be clipped with an ellipsis when it overflows its container.
                        </x-aura::text>

                    </div>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim{{-- Font Weights --}}
<x-aura::text weight="light">Light Weight Text</x-aura::text>
<x-aura::text weight="normal">Normal Weight Text</x-aura::text>
<x-aura::text weight="medium">Medium Weight Text</x-aura::text>
<x-aura::text weight="semibold">Semibold Weight Text</x-aura::text>
<x-aura::text weight="bold">Bold Weight Text</x-aura::text>
<x-aura::text weight="extrabold">Extrabold Weight Text</x-aura::text>
<x-aura::text weight="black">Black Weight Text</x-aura::text>

{{-- Line Clamping (2 Lines) --}}
<x-aura::text size="sm" :clamp="2">
    Long description paragraph clamped cleanly to two lines with trailing ellipsis...
</x-aura::text>

{{-- Single Line Truncation --}}
<div class="max-w-xs">
    <x-aura::text size="sm" :truncate="true">
        Long single line string truncated with an ellipsis...
    </x-aura::text>
</div>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Metadata Card Pattern -->
    <x-aura::code title="4. Real World Metadata and Key Value Card">

        <x-slot:preview>

            <x-aura::card>

                <div class="space-y-4 w-full">

                    <div class="space-y-1">

                        <x-aura::heading level="3" size="sm">API Secret and Webhook Credentials</x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Environment tokens used to sign and authenticate automated webhook dispatches.
                        </x-aura::text>

                    </div>

                    <div class="divide-y divide-zinc-200 dark:divide-zinc-800 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                        <div class="flex items-center justify-between py-2">

                            <x-aura::text size="sm" variant="subtle" weight="medium">API Secret Key</x-aura::text>

                            <x-aura::text size="sm" variant="mono">sk_live_99f2a4b87e21x81a</x-aura::text>

                        </div>

                        <div class="flex items-center justify-between py-2">

                            <x-aura::text size="sm" variant="subtle" weight="medium">Digest Hash</x-aura::text>

                            <x-aura::text size="sm" variant="mono">e3b0c44298fc1c149afbf4c8</x-aura::text>

                        </div>

                        <div class="flex items-center justify-between py-2">

                            <x-aura::text size="sm" variant="subtle" weight="medium">Last Rotation</x-aura::text>

                            <x-aura::text size="sm" variant="positive" weight="medium">Active (Rotated 2d ago)</x-aura::text>

                        </div>

                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="space-y-4">
        <div class="space-y-1">
            <x-aura::heading level="3" size="sm">API Secret and Webhook Credentials</x-aura::heading>
            <x-aura::text size="sm" variant="subtle">
                Environment tokens used to sign and authenticate automated webhook dispatches.
            </x-aura::text>
        </div>

        <div class="divide-y divide-zinc-200 dark:divide-zinc-800 border-t border-zinc-200 dark:border-zinc-800 pt-3">
            <div class="flex items-center justify-between py-2">
                <x-aura::text size="sm" variant="subtle" weight="medium">API Secret Key</x-aura::text>
                <x-aura::text size="sm" variant="mono">sk_live_99f2a4b87e21x81a</x-aura::text>
            </div>
            <div class="flex items-center justify-between py-2">
                <x-aura::text size="sm" variant="subtle" weight="medium">Status</x-aura::text>
                <x-aura::text size="sm" variant="positive" weight="medium">Active</x-aura::text>
            </div>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

</x-aura::flex>
