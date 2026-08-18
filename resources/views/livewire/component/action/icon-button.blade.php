<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon Button — Aura Wire')] 
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
            Icon Button
        </x-aura::heading>

        <x-aura::subheading size="md">
            Compact circular and square icon triggers powered by Lucide icons for toolbars, list controls, and quick actions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="pencil" variant="subtle" size="md" label="Edit" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Icon Button Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" class="flex-wrap">

                <x-aura::icon-button icon="pencil" variant="primary" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" label="View" />

                <x-aura::icon-button icon="heart" variant="subtle" label="Favorite" />

                <x-aura::icon-button icon="settings" variant="outline" label="Settings" />

                <x-aura::icon-button icon="share-2" variant="ghost" label="Share" />

                <x-aura::icon-button icon="trash-2" variant="danger" label="Delete" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="pencil" variant="primary" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" label="View" />

                <x-aura::icon-button icon="heart" variant="subtle" label="Favorite" />

                <x-aura::icon-button icon="settings" variant="outline" label="Settings" />

                <x-aura::icon-button icon="share-2" variant="ghost" label="Share" />

                <x-aura::icon-button icon="trash-2" variant="danger" label="Delete" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Shapes (Circle vs Square) -->
    <x-aura::code title="2. Shapes (Circle vs Square)">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::icon-button icon="pencil" variant="primary" shape="circle" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="circle" label="View" />

                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="circle" label="Bookmark" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="circle" label="Delete" />

                </x-aura::flex>

                <x-aura::flex align="center" gap="3">

                    <x-aura::icon-button icon="pencil" variant="primary" shape="square" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" label="View" />

                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="square" label="Bookmark" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" label="Delete" />

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="pencil" variant="primary" shape="circle" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" shape="circle" label="View" />

                <x-aura::icon-button icon="bookmark" variant="subtle" shape="circle" label="Bookmark" />

                <x-aura::icon-button icon="trash-2" variant="danger" shape="circle" label="Delete" />

                <x-aura::icon-button icon="pencil" variant="primary" shape="square" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" shape="square" label="View" />

                <x-aura::icon-button icon="bookmark" variant="subtle" shape="square" label="Bookmark" />

                <x-aura::icon-button icon="trash-2" variant="danger" shape="square" label="Delete" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Sizes -->
    <x-aura::code title="3. Proportional Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" class="flex-wrap">

                <x-aura::icon-button icon="bell" size="xs" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="sm" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="md" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="lg" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="xl" variant="secondary" label="Alert" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="bell" size="xs" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="sm" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="md" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="lg" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="xl" variant="secondary" label="Alert" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Table Actions -->
    <x-aura::code title="4. Real World Action Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between" class="w-full">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Alex Kovacs
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            alex@example.com
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View" />

                        <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit" />

                        <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete" />

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
                                Alex Kovacs
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                alex@example.com
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View" />

                            <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit" />

                            <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete" />

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
