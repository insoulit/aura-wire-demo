<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Text - Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::stack gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Typography</x-aura::kicker>
                <x-aura::badge variant="subtle" size="md">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Text</x-aura::heading>
            <x-aura::subheading size="md">
                Versatile body typography component supporting semantic color variants, font size scales, custom weights, truncation, and monospace strings.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::text size="md" variant="subtle" weight="medium">Body paragraph content.</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Text Color Variants -->
    <x-aura::code title="1. Text Color Variants">
        <x-slot:preview>
            <div class="space-y-3 w-full">
                <div class="flex items-center gap-3">
                    <x-aura::badge variant="neutral" size="md">default</x-aura::badge>
                    <x-aura::text size="md" variant="default">Default Primary Body Text</x-aura::text>
                </div>
                <div class="flex items-center gap-3">
                    <x-aura::badge variant="subtle" size="md">subtle</x-aura::badge>
                    <x-aura::text size="md" variant="subtle">Subtle Secondary Description Text</x-aura::text>
                </div>
                <div class="flex items-center gap-3">
                    <x-aura::badge variant="subtle" size="md">accent</x-aura::badge>
                    <x-aura::text size="md" variant="accent">Accent Colored Highlight Text</x-aura::text>
                </div>
                <div class="flex items-center gap-3">
                    <x-aura::badge variant="positive" size="md">positive</x-aura::badge>
                    <x-aura::text size="md" variant="positive">Positive Success State Confirmation</x-aura::text>
                </div>
                <div class="flex items-center gap-3">
                    <x-aura::badge variant="warning" size="md">warning</x-aura::badge>
                    <x-aura::text size="md" variant="warning">Warning Cautionary Notice Message</x-aura::text>
                </div>
                <div class="flex items-center gap-3">
                    <x-aura::badge variant="danger" size="md">danger</x-aura::badge>
                    <x-aura::text size="md" variant="danger">Danger Error Alert Notification</x-aura::text>
                </div>
                <div class="flex items-center gap-3">
                    <x-aura::badge variant="neutral" size="md">mono</x-aura::badge>
                    <x-aura::text size="sm" variant="mono">Monospace System Log & Key String</x-aura::text>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::text variant="default">Default Primary Body Text</x-aura::text>
<x-aura::text variant="subtle">Subtle Secondary Description Text</x-aura::text>
<x-aura::text variant="accent">Accent Colored Highlight Text</x-aura::text>
<x-aura::text variant="positive">Positive Success State Confirmation</x-aura::text>
<x-aura::text variant="warning">Warning Cautionary Notice Message</x-aura::text>
<x-aura::text variant="danger">Danger Error Alert Notification</x-aura::text>
<x-aura::text variant="mono">Monospace System Log & Key String</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Text Sizes (xl, lg, md, sm, xs) -->
    <x-aura::code title="2. Text Size Scales (xl, lg, md, sm, xs)">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <div class="space-y-1">
                    <x-aura::badge variant="subtle" size="md">size="xl" (20px / 24px)</x-aura::badge>
                    <x-aura::text size="xl">Extra Large Text — High emphasis lead intro and featured callouts.</x-aura::text>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="lg" (18px / 20px)</x-aura::badge>
                    <x-aura::text size="lg">Large Text — Section lead paragraphs and sub headlines.</x-aura::text>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="md" (16px, Default)</x-aura::badge>
                    <x-aura::text size="md">Medium Text — Standard body paragraph default font size.</x-aura::text>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="sm" (14px)</x-aura::badge>
                    <x-aura::text size="sm">Small Text — Form field help hints, labels, and secondary UI metadata.</x-aura::text>
                </div>
                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <x-aura::badge variant="subtle" size="md">size="xs" (12px)</x-aura::badge>
                    <x-aura::text size="xs">Extra Small Text — Micro captions, timestamps, and badge tags.</x-aura::text>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::text size="xl">Extra Large Text (20px / 24px)</x-aura::text>
<x-aura::text size="lg">Large Text (18px / 20px)</x-aura::text>
<x-aura::text size="md">Medium Text (16px, Default)</x-aura::text>
<x-aura::text size="sm">Small Text (14px)</x-aura::text>
<x-aura::text size="xs">Extra Small Text (12px)</x-aura::text>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Font Weights & Truncation -->
    <x-aura::code title="3. Font Weights & Truncation">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <div class="space-y-2">
                    <p class="text-xs font-mono font-bold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Font Weights (weight prop)</p>
                    <div class="space-y-1.5">
                        <x-aura::text weight="normal">Normal Weight Text (400)</x-aura::text>
                        <x-aura::text weight="medium">Medium Weight Text (500)</x-aura::text>
                        <x-aura::text weight="semibold">Semibold Weight Text (600)</x-aura::text>
                        <x-aura::text weight="bold">Bold Weight Text (700)</x-aura::text>
                    </div>
                </div>

                <div class="space-y-2 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                    <p class="text-xs font-mono font-bold text-zinc-500 dark:text-zinc-400 uppercase tracking-wider">Truncation (truncate prop)</p>
                    <div class="max-w-xs p-3 rounded-lg bg-zinc-100 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/60">
                        <x-aura::text size="sm" :truncate="true">
                            This is a very long single-line paragraph that will automatically be clipped with an ellipsis when it overflows its container.
                        </x-aura::text>
                    </div>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim{{-- Font Weights --}}
<x-aura::text weight="normal">Normal Weight Text (400)</x-aura::text>
<x-aura::text weight="medium">Medium Weight Text (500)</x-aura::text>
<x-aura::text weight="semibold">Semibold Weight Text (600)</x-aura::text>
<x-aura::text weight="bold">Bold Weight Text (700)</x-aura::text>

{{-- Ellipsis Truncation --}}
<div class="max-w-xs">
    <x-aura::text size="sm" :truncate="true">
        Long single line string truncated with an ellipsis...
    </x-aura::text>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Real World Metadata & Key Value Card -->
    <x-aura::code title="4. Real World Metadata & Key Value Card">
        <x-slot:preview>
            <x-aura::card>
                <div class="space-y-4 w-full">
                    <div class="space-y-1">
                        <x-aura::heading level="3" size="sm">API Secret & Webhook Credentials</x-aura::heading>
                        <x-aura::text size="sm" variant="subtle">
                            Environment tokens used to sign and authenticate automated webhook dispatches.
                        </x-aura::text>
                    </div>

                    <div class="divide-y divide-zinc-200 dark:divide-zinc-800 border-t border-zinc-200 dark:border-zinc-800 pt-3">
                        <div class="flex items-center justify-between py-2">
                            <x-aura::text size="xs" variant="subtle" weight="medium">API Secret Key</x-aura::text>
                            <x-aura::text size="xs" variant="mono">sk_live_99f2a4b87e21x81a</x-aura::text>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <x-aura::text size="xs" variant="subtle" weight="medium">SHA-256 Digest</x-aura::text>
                            <x-aura::text size="xs" variant="mono">e3b0c44298fc1c149afbf4c8</x-aura::text>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <x-aura::text size="xs" variant="subtle" weight="medium">Last Rotation</x-aura::text>
                            <x-aura::text size="xs" variant="positive" weight="medium">Active (Rotated 2d ago)</x-aura::text>
                        </div>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="space-y-4">
        <div>
            <x-aura::heading level="3" size="sm">API Secret & Webhook Credentials</x-aura::heading>
            <x-aura::text size="sm" variant="subtle">
                Environment tokens used to sign and authenticate automated webhook dispatches.
            </x-aura::text>
        </div>

        <div class="divide-y divide-zinc-200 dark:divide-zinc-800 border-t border-zinc-200 dark:border-zinc-800 pt-3">
            <div class="flex items-center justify-between py-2">
                <x-aura::text size="xs" variant="subtle" weight="medium">API Secret Key</x-aura::text>
                <x-aura::text size="xs" variant="mono">sk_live_99f2a4b87e21x81a</x-aura::text>
            </div>
            <div class="flex items-center justify-between py-2">
                <x-aura::text size="xs" variant="subtle" weight="medium">Status</x-aura::text>
                <x-aura::text size="xs" variant="positive" weight="medium">Active</x-aura::text>
            </div>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>
