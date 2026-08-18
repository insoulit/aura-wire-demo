<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Avatar — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Avatar
        </x-aura::heading>

        <x-aura::subheading size="md">
            User profile images and fallback initial badges with online status indicators.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::avatar initials="JD" size="md" status="online" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Avatar Sizes and Statuses -->
    <x-aura::code title="1. User Avatars">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" class="flex-wrap">

                <x-aura::avatar initials="AW" size="xs" status="online" />

                <x-aura::avatar initials="JD" size="sm" status="online" />

                <x-aura::avatar initials="US" size="md" status="busy" />

                <x-aura::avatar initials="AD" size="lg" status="away" />

                <x-aura::avatar initials="SQ" size="xl" square status="offline" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::avatar initials="AW" size="xs" status="online" />

                <x-aura::avatar initials="JD" size="sm" status="online" />

                <x-aura::avatar initials="US" size="md" status="busy" />

                <x-aura::avatar initials="AD" size="lg" status="away" />

                <x-aura::avatar initials="SQ" size="xl" square status="offline" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
