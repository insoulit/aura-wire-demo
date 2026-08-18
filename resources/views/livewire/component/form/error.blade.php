<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Error - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Error</x-aura::heading>
            <x-aura::subheading size="md">
                Inline validation error messages connected to Livewire error bags or explicit strings.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::error message="The email field is required." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Field Error Message">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::error message="The email field is required." />
                <x-aura::error message="Password must be at least 8 characters." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::error message="The email field is required." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
