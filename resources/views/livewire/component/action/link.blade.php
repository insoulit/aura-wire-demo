<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Link — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Action
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Link
        </x-aura::heading>

        <x-aura::subheading size="md">
            Lightweight inline navigation links with variant styling, auto detected external indicators, optional icons, and configurable underline behavior.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="/docs" variant="default" icon="book-open">
                    Documentation
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Link Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::link href="#">
                    Default
                </x-aura::link>

                <x-aura::link href="#" variant="subtle">
                    Subtle
                </x-aura::link>

                <x-aura::link href="#" variant="primary">
                    Primary
                </x-aura::link>

                <x-aura::link href="#" variant="danger">
                    Danger
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="#">
                    Default
                </x-aura::link>

                <x-aura::link href="#" variant="subtle">
                    Subtle
                </x-aura::link>

                <x-aura::link href="#" variant="primary">
                    Primary
                </x-aura::link>

                <x-aura::link href="#" variant="danger">
                    Danger
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Link Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::link href="#" size="xs">
                    Extra Small
                </x-aura::link>

                <x-aura::link href="#" size="sm">
                    Small
                </x-aura::link>

                <x-aura::link href="#" size="md">
                    Medium
                </x-aura::link>

                <x-aura::link href="#" size="lg">
                    Large
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="#" size="xs">
                    Extra Small
                </x-aura::link>

                <x-aura::link href="#" size="sm">
                    Small
                </x-aura::link>

                <x-aura::link href="#" size="md">
                    Medium
                </x-aura::link>

                <x-aura::link href="#" size="lg">
                    Large
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. With Icons -->
    <x-aura::code title="3. Links with Icons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::link href="#" icon="book-open">
                    Documentation
                </x-aura::link>

                <x-aura::link href="#" icon="settings">
                    Settings
                </x-aura::link>

                <x-aura::link href="#" icon-trailing="arrow-right">
                    Next
                </x-aura::link>

                <x-aura::link href="#" icon="download" icon-trailing="arrow-down">
                    Export
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="#" icon="book-open">
                    Documentation
                </x-aura::link>

                <x-aura::link href="#" icon="settings">
                    Settings
                </x-aura::link>

                <x-aura::link href="#" icon-trailing="arrow-right">
                    Next
                </x-aura::link>

                <x-aura::link href="#" icon="download" icon-trailing="arrow-down">
                    Export
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. External Links -->
    <x-aura::code title="4. External Links">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::link href="https://github.com" target="_blank">
                    GitHub
                </x-aura::link>

                <x-aura::link href="https://packagist.org" target="_blank" variant="primary">
                    Packagist
                </x-aura::link>

                <x-aura::link href="https://laravel.com" target="_blank" variant="subtle">
                    Laravel
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="https://github.com" target="_blank">
                    GitHub
                </x-aura::link>

                <x-aura::link href="https://packagist.org" target="_blank" variant="primary">
                    Packagist
                </x-aura::link>

                <x-aura::link href="https://laravel.com" target="_blank" variant="subtle">
                    Laravel
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Underline Styles -->
    <x-aura::code title="5. Underline Behavior">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::link href="#" underline="hover">
                    Hover
                </x-aura::link>

                <x-aura::link href="#" underline="always">
                    Always
                </x-aura::link>

                <x-aura::link href="#" underline="none">
                    None
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="#" underline="hover">
                    Hover
                </x-aura::link>

                <x-aura::link href="#" underline="always">
                    Always
                </x-aura::link>

                <x-aura::link href="#" underline="none">
                    None
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 6. Real World Card Pattern -->
    <x-aura::code title="6. Real World Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between" class="w-full">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Project Settings
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Configure your repository preferences and team access.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="4">

                        <x-aura::link href="#" variant="subtle" size="sm" icon="eye">
                            Preview
                        </x-aura::link>

                        <x-aura::link href="#" variant="primary" size="sm" icon="settings">
                            Manage
                        </x-aura::link>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::flex direction="col" align="start" gap="1">

                            <x-aura::heading level="3" size="sm">
                                Project Settings
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                Configure your repository preferences and team access.
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="4">

                            <x-aura::link href="#" variant="subtle" size="sm" icon="eye">
                                Preview
                            </x-aura::link>

                            <x-aura::link href="#" variant="primary" size="sm" icon="settings">
                                Manage
                            </x-aura::link>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
