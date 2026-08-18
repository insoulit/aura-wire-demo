<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Text — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Typography
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Text
        </x-aura::heading>

        <x-aura::subheading size="md">
            Versatile body typography component supporting semantic color variants, font size scales, custom weights, line clamping, and monospace strings.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::text size="sm">
                    Body paragraph content.
                </x-aura::text>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Text Tone Variants -->
    <x-aura::code title="1. Text Tone Variants">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="3">

                <x-aura::text size="sm" variant="default">
                    Default Primary Body Text
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    Subtle Secondary Description Text
                </x-aura::text>

                <x-aura::text size="sm" variant="accent">
                    Accent Bold Highlight Text
                </x-aura::text>

                <x-aura::text size="sm" variant="muted">
                    Muted Supplementary Annotation Text
                </x-aura::text>

                <x-aura::text size="sm" variant="mono">
                    Monospace System Log and Key String
                </x-aura::text>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::text size="sm" variant="default">
                    Default Primary Body Text
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    Subtle Secondary Description Text
                </x-aura::text>

                <x-aura::text size="sm" variant="accent">
                    Accent Bold Highlight Text
                </x-aura::text>

                <x-aura::text size="sm" variant="muted">
                    Muted Supplementary Annotation Text
                </x-aura::text>

                <x-aura::text size="sm" variant="mono">
                    Monospace System Log and Key String
                </x-aura::text>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Text Size Scales -->
    <x-aura::code title="2. Text Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::text size="2xl">
                    2XL Text — Extra large high emphasis lead intro paragraph.
                </x-aura::text>

                <x-aura::text size="xl">
                    XL Text — Large intro summaries and featured highlights.
                </x-aura::text>

                <x-aura::text size="lg">
                    Large Text — Section lead paragraphs and sub headlines.
                </x-aura::text>

                <x-aura::text size="md">
                    Medium Text — Standard 16px body paragraph font size.
                </x-aura::text>

                <x-aura::text size="sm">
                    Small Text — 14px default body font size for cards, forms, and lists.
                </x-aura::text>

                <x-aura::text size="xs">
                    Extra Small Text — 12px secondary metadata, timestamps, and captions.
                </x-aura::text>

                <x-aura::text size="2xs">
                    2XS Text — 11px micro labels, badge annotations, and tight tables.
                </x-aura::text>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::text size="2xl">
                    2XL Text — Extra large high emphasis lead intro paragraph.
                </x-aura::text>

                <x-aura::text size="xl">
                    XL Text — Large intro summaries and featured highlights.
                </x-aura::text>

                <x-aura::text size="lg">
                    Large Text — Section lead paragraphs and sub headlines.
                </x-aura::text>

                <x-aura::text size="md">
                    Medium Text — Standard 16px body paragraph font size.
                </x-aura::text>

                <x-aura::text size="sm">
                    Small Text — 14px default body font size for cards, forms, and lists.
                </x-aura::text>

                <x-aura::text size="xs">
                    Extra Small Text — 12px secondary metadata, timestamps, and captions.
                </x-aura::text>

                <x-aura::text size="2xs">
                    2XS Text — 11px micro labels, badge annotations, and tight tables.
                </x-aura::text>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Font Weights and Clamping -->
    <x-aura::code title="3. Font Weights and Clamping">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::text weight="light">
                    Light Weight Text (300)
                </x-aura::text>

                <x-aura::text weight="normal">
                    Normal Weight Text (400)
                </x-aura::text>

                <x-aura::text weight="medium">
                    Medium Weight Text (500)
                </x-aura::text>

                <x-aura::text weight="semibold">
                    Semibold Weight Text (600)
                </x-aura::text>

                <x-aura::text weight="bold">
                    Bold Weight Text (700)
                </x-aura::text>

                <x-aura::text weight="extrabold">
                    Extrabold Weight Text (800)
                </x-aura::text>

                <x-aura::text weight="black">
                    Black Weight Text (900)
                </x-aura::text>

                <x-aura::text size="sm" :clamp="2">
                    Aura Wire is a comprehensive UI design system built for modern Laravel and Livewire applications. It provides production grade Blade components, accessible form primitives, customizable overlays, interactive data displays, and polished documentation templates.
                </x-aura::text>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::text weight="light">
                    Light Weight Text (300)
                </x-aura::text>

                <x-aura::text weight="normal">
                    Normal Weight Text (400)
                </x-aura::text>

                <x-aura::text weight="medium">
                    Medium Weight Text (500)
                </x-aura::text>

                <x-aura::text weight="semibold">
                    Semibold Weight Text (600)
                </x-aura::text>

                <x-aura::text weight="bold">
                    Bold Weight Text (700)
                </x-aura::text>

                <x-aura::text weight="extrabold">
                    Extrabold Weight Text (800)
                </x-aura::text>

                <x-aura::text weight="black">
                    Black Weight Text (900)
                </x-aura::text>

                <x-aura::text size="sm" :clamp="2">
                    Aura Wire is a comprehensive UI design system built for modern Laravel and Livewire applications. It provides production grade Blade components, accessible form primitives, customizable overlays, interactive data displays, and polished documentation templates.
                </x-aura::text>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Metadata Card Pattern -->
    <x-aura::code title="4. Real World Metadata Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="1">

                    <x-aura::heading level="3" size="sm">
                        API Secret and Webhook Credentials
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        Environment tokens used to sign and authenticate automated webhook dispatches.
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="stretch" class="w-full divide-y divide-zinc-200 dark:divide-zinc-800 border-t border-zinc-200 dark:border-zinc-800 pt-2">

                    <x-aura::flex align="center" justify="between" class="py-2.5">

                        <x-aura::text size="sm" variant="subtle" weight="medium">
                            API Secret Key
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono">
                            sk_live_99f2a4b87e21x81a
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" justify="between" class="py-2.5">

                        <x-aura::text size="sm" variant="subtle" weight="medium">
                            Digest Hash
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono">
                            e3b0c44298fc1c149afbf4c8
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" justify="between" class="py-2.5">

                        <x-aura::text size="sm" variant="subtle" weight="medium">
                            Last Rotation
                        </x-aura::text>

                        <x-aura::text size="sm" variant="default" weight="medium">
                            Active (Rotated 2d ago)
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="sm">
                            API Secret and Webhook Credentials
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Environment tokens used to sign and authenticate automated webhook dispatches.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" class="w-full divide-y divide-zinc-200 dark:divide-zinc-800 border-t border-zinc-200 dark:border-zinc-800 pt-2">

                        <x-aura::flex align="center" justify="between" class="py-2.5">

                            <x-aura::text size="sm" variant="subtle" weight="medium">
                                API Secret Key
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono">
                                sk_live_99f2a4b87e21x81a
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between" class="py-2.5">

                            <x-aura::text size="sm" variant="subtle" weight="medium">
                                Digest Hash
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono">
                                e3b0c44298fc1c149afbf4c8
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between" class="py-2.5">

                            <x-aura::text size="sm" variant="subtle" weight="medium">
                                Last Rotation
                            </x-aura::text>

                            <x-aura::text size="sm" variant="default" weight="medium">
                                Active (Rotated 2d ago)
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
