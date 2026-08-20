<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Blockquote — Aura Wire')] 
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
            Blockquote
        </x-aura::heading>

        <x-aura::subheading size="md">
            Editorial quotation component with customizable border accents, author attribution, publication citation, and avatar metadata.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::blockquote author="Alex River" cite="Engineering Director">
                    Simplicity is prerequisite for reliability.
                </x-aura::blockquote>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Blockquote with Attribution -->
    <x-aura::code title="1. Standard Blockquote with Attribution">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start">

                <x-aura::blockquote author="Edsger W. Dijkstra" cite="Turing Award Winner">
                    Simplicity is prerequisite for reliability. Complex systems always break in unforeseen manners.
                </x-aura::blockquote>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::blockquote author="Edsger W. Dijkstra" cite="Turing Award Winner">
                    Simplicity is prerequisite for reliability. Complex systems always break in unforeseen manners.
                </x-aura::blockquote>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Blockquote with Avatar -->
    <x-aura::code title="2. Blockquote with Avatar">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start">

                <x-aura::blockquote
                    author="Sarah Connor"
                    cite="Director of Product"
                    avatar="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&auto=format&fit=crop&q=80"
                    size="lg"
                >
                    Aura Wire completely revolutionized how our engineering team builds dashboards and internal tools.
                </x-aura::blockquote>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::blockquote
                    author="Sarah Connor"
                    cite="Director of Product"
                    avatar="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&auto=format&fit=crop&q=80"
                    size="lg"
                >
                    Aura Wire completely revolutionized how our engineering team builds dashboards and internal tools.
                </x-aura::blockquote>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Scales -->
    <x-aura::code title="3. Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="6">

                <x-aura::blockquote size="xl" author="Steve Jobs">
                    Design is not just what it looks like and feels like. Design is how it works.
                </x-aura::blockquote>

                <x-aura::blockquote size="md" author="Antoine de Saint-Exupéry">
                    Perfection is achieved not when there is nothing more to add, but when there is nothing left to take away.
                </x-aura::blockquote>

                <x-aura::blockquote size="sm" author="Kent Beck">
                    Make it work, make it right, make it fast.
                </x-aura::blockquote>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::blockquote size="xl" author="Steve Jobs">
                    Design is not just what it looks like and feels like. Design is how it works.
                </x-aura::blockquote>

                <x-aura::blockquote size="md" author="Antoine de Saint-Exupéry">
                    Perfection is achieved not when there is nothing more to add, but when there is nothing left to take away.
                </x-aura::blockquote>

                <x-aura::blockquote size="sm" author="Kent Beck">
                    Make it work, make it right, make it fast.
                </x-aura::blockquote>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Card Testimonial Pattern -->
    <x-aura::code title="4. Card Testimonial Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::blockquote
                    :border="false"
                    author="Michael Vance"
                    cite="Lead Architect"
                    avatar="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80"
                    size="md"
                >
                    The component composition in Aura Wire strikes the perfect balance between developer flexibility and design consistency.
                </x-aura::blockquote>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::blockquote
                        :border="false"
                        author="Michael Vance"
                        cite="Lead Architect"
                        avatar="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80"
                        size="md"
                    >
                        The component composition in Aura Wire strikes the perfect balance between developer flexibility and design consistency.
                    </x-aura::blockquote>

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
                Available properties and configurations for the blockquote component.
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
                            author
                        </x-aura::text>

                        <x-aura::tooltip text="Quotation author attribution" position="top">

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
                    <x-aura::text size="sm" variant="subtle">
                        Author name string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            cite
                        </x-aura::text>

                        <x-aura::tooltip text="Author title or source publication citation" position="top">

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
                    <x-aura::text size="sm" variant="subtle">
                        Citation or title string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            avatar
                        </x-aura::text>

                        <x-aura::tooltip text="Optional author avatar image source URL" position="top">

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
                    <x-aura::text size="sm" variant="subtle">
                        Image URL string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Color tone and text contrast variant" position="top">

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
                            accent
                        </x-aura::badge>

                        <x-aura::badge variant="dark" size="md">
                            dark
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

                        <x-aura::tooltip text="Quotation font size scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        md
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            border
                        </x-aura::text>

                        <x-aura::tooltip text="Toggle left decorative accent border" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        true
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

        </x-aura::table>

    </x-aura::card>

</x-aura::container>
