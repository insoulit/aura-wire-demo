<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Body — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Layout
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Body
        </x-aura::heading>

        <x-aura::subheading size="md">
            Root page body layout component managing theme background colors, font smoothing, and viewport height scaling.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::body>
                    {{ $slot }}
                </x-aura::body>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Layout Integration Pattern -->
    <x-aura::code title="1. Page Layout Structure">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="1">

                    <x-aura::heading level="3" size="sm">
                        App Shell Wrapper
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        Provides clean background color tokens and full viewport height containment for layouts.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!DOCTYPE html>
                <html lang="en" class="h-full antialiased">
                <head>
                    <title>App Title</title>
                </head>
                <x-aura::body>

                    <livewire:layout.shared.header />

                    <main class="flex-1">
                        {{ $slot }}
                    </main>

                    <livewire:layout.shared.footer />

                </x-aura::body>
                </html>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
