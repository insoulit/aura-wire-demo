<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Inline Code — Aura Wire')] 
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
            Inline Code
        </x-aura::heading>

        <x-aura::subheading size="md">
            Monospace inline code badges for displaying commands, terminal parameters, file paths, and syntax keywords within body prose.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::inline-code>
                    composer require insoulit/aura-wire
                </x-aura::inline-code>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Inline Prose Integration -->
    <x-aura::code title="1. Inline Prose Integration">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="3">

                <x-aura::text size="sm">
                    Run <x-aura::inline-code>
                        composer require insoulit/aura-wire
                    </x-aura::inline-code> to install package dependencies.
                </x-aura::text>

                <x-aura::text size="sm">
                    Open your <x-aura::inline-code>
                        config/app.php
                    </x-aura::inline-code> file.
                </x-aura::text>

                <x-aura::text size="sm">
                    Execute <x-aura::inline-code>
                        php artisan migrate
                    </x-aura::inline-code> to generate database schema tables.
                </x-aura::text>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::text size="sm">
                    Run <x-aura::inline-code>
                        composer require insoulit/aura-wire
                    </x-aura::inline-code> to install package dependencies.
                </x-aura::text>

                <x-aura::text size="sm">
                    Open your <x-aura::inline-code>
                        config/app.php
                    </x-aura::inline-code> file.
                </x-aura::text>

                <x-aura::text size="sm">
                    Execute <x-aura::inline-code>
                        php artisan migrate
                    </x-aura::inline-code> to generate database schema tables.
                </x-aura::text>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Style Variants -->
    <x-aura::code title="2. Style Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" :wrap="true">

                <x-aura::inline-code variant="default">
                    npm run build
                </x-aura::inline-code>

                <x-aura::inline-code variant="outline">
                    git status
                </x-aura::inline-code>

                <x-aura::inline-code variant="dark">
                    ddev start
                </x-aura::inline-code>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::inline-code variant="default">
                    npm run build
                </x-aura::inline-code>

                <x-aura::inline-code variant="outline">
                    git status
                </x-aura::inline-code>

                <x-aura::inline-code variant="dark">
                    ddev start
                </x-aura::inline-code>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Scales -->
    <x-aura::code title="3. Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::inline-code size="md">
                    --port=8080
                </x-aura::inline-code>

                <x-aura::inline-code size="sm">
                    --port=8080
                </x-aura::inline-code>

                <x-aura::inline-code size="xs">
                    --port=8080
                </x-aura::inline-code>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::inline-code size="md">
                    --port=8080
                </x-aura::inline-code>

                <x-aura::inline-code size="sm">
                    --port=8080
                </x-aura::inline-code>

                <x-aura::inline-code size="xs">
                    --port=8080
                </x-aura::inline-code>
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
                Available properties and configurations for the inline code component.
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
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Inline code font size and padding scale" position="top">

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
                            xs
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
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

                        <x-aura::tooltip text="Color tone and border styling mode" position="top">

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
                            outline
                        </x-aura::badge>

                        <x-aura::badge variant="dark" size="md">
                            dark
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>
