<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Hero Header — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="6" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>Design Blocks</x-aura::kicker>

                <x-aura::heading level="1" size="lg">Hero Header</x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- Hero Header Block Preview -->
    <x-aura::code title="Landing Page Hero Header Block">

        <x-slot:preview>

            <div class="w-full py-8 text-center space-y-4 flex flex-col items-center justify-center">

                <x-aura::kicker>Next Gen Component Library</x-aura::kicker>

                <x-aura::heading level="1" size="xl">
                    Build Stunning Web Interfaces in Seconds
                </x-aura::heading>

                <x-aura::subheading size="md">
                    Production ready, ultra accessible Blade and Livewire components crafted for modern Laravel applications.
                </x-aura::subheading>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 pt-2 w-full sm:w-auto max-w-xs sm:max-w-none">

                    <x-aura::button variant="primary" size="md">
                        Start
                    </x-aura::button>

                    <x-aura::button variant="outline" size="md">
                        Explore
                    </x-aura::button>

                </div>

            </div>

        </x-slot:preview>

        <x-slot name="codeSlot">@verbatim<div class="w-full py-8 text-center space-y-4 flex flex-col items-center justify-center">
    <x-aura::kicker>Next Gen Component Library</x-aura::kicker>
    <x-aura::heading level="1" size="xl">
        Build Stunning Web Interfaces in Seconds
    </x-aura::heading>
    <x-aura::subheading size="md">
        Production ready components for modern Laravel applications.
    </x-aura::subheading>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2 w-full sm:w-auto">
        <x-aura::button variant="primary" size="md">Start</x-aura::button>
        <x-aura::button variant="outline" size="md">Explore</x-aura::button>
    </div>
</div>@endverbatim</x-slot>

    </x-aura::code>

</x-aura::stack>
