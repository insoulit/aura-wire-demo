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

            <x-aura::badge variant="subtle" size="sm">
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

            <x-aura::flex direction="col" align="start" class="w-full">

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

            <x-aura::flex direction="col" align="start" class="w-full">

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

            <x-aura::flex direction="col" align="start" class="w-full" gap="6">

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

</x-aura::container>
