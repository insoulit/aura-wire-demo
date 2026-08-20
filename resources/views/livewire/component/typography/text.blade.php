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

            <x-aura::badge variant="subtle" size="md">
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

            <x-aura::flex direction="col" align="start" gap="3">

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

            <x-aura::flex direction="col" align="start" gap="4">

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

            <x-aura::flex direction="col" align="start" gap="4">

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

    <!-- 4. Real World Meta Card Pattern -->
    <x-aura::code title="4. Real World Meta Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="3">

                <x-aura::flex align="center" justify="between">

                    <x-aura::heading level="3" size="md">
                        System Configuration
                    </x-aura::heading>

                    <x-aura::badge variant="positive" size="md">
                        ONLINE
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" align="stretch" gap="2.5">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" variant="subtle" weight="medium">
                            API Secret Key
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono">
                            sk_live_99f2a4b87e21x81a
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" variant="subtle" weight="medium">
                            Digest Hash
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono">
                            e3b0c44298fc1c149afbf4c8
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" justify="between">

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
                <x-aura::card size="2xl" gap="3">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::heading level="3" size="md">
                            System Configuration
                        </x-aura::heading>

                        <x-aura::badge variant="positive" size="md">
                            ONLINE
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="2.5">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" variant="subtle" weight="medium">
                                API Secret Key
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono">
                                sk_live_99f2a4b87e21x81a
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" variant="subtle" weight="medium">
                                Digest Hash
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono">
                                e3b0c44298fc1c149afbf4c8
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between">

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

    <!-- Component Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Component Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the text component.
            </x-aura::text>

        </x-aura::flex>

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Prop
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Available Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            as
                        </x-aura::text>

                        <x-aura::tooltip text="HTML element tag name" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        p
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            p
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            span
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            label
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            small
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            strong
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            em
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            label
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Body text font size scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        sm
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            2xs
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            xs
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            lg
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2xl
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Semantic text color and font family mode" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        default
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            default
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            muted
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            accent
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            secondary
                        </x-aura::badge>

                        <x-aura::badge variant="positive" size="md">
                            positive
                        </x-aura::badge>

                        <x-aura::badge variant="warning" size="md">
                            warning
                        </x-aura::badge>

                        <x-aura::badge variant="danger" size="md">
                            danger
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            info
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            mono
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            white
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            inverse
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            weight
                        </x-aura::text>

                        <x-aura::tooltip text="Font weight scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        normal
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            light
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            normal
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            medium
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            semibold
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bold
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            extrabold
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            black
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            align
                        </x-aura::text>

                        <x-aura::tooltip text="Text alignment within container" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            left
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            center
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            right
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            justify
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            truncate
                        </x-aura::text>

                        <x-aura::tooltip text="Truncate single line overflow with ellipsis" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            nowrap
                        </x-aura::text>

                        <x-aura::tooltip text="Prevent text from wrapping into multiple lines" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            italic
                        </x-aura::text>

                        <x-aura::tooltip text="Render text in italic typeface style" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            pretty
                        </x-aura::text>

                        <x-aura::tooltip text="Apply text wrap pretty to prevent single word orphans" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            clamp
                        </x-aura::text>

                        <x-aura::tooltip text="Line clamp count to limit visible lines with multi-line ellipsis" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            5
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            tracking
                        </x-aura::text>

                        <x-aura::tooltip text="Letter spacing tracking scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            tighter
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            tight
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            normal
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            wide
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            wider
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            widest
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>
