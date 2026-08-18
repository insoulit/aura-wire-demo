<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Field - Aura Wire')] 
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
            <x-aura::heading level="1" size="xl">Field &amp; Label</x-aura::heading>
            <x-aura::subheading size="md">
                Form field wrapper combining labels, mandatory indicators, help hints, and validation message handling.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::field label="Username" hint="Enter handle" required>
    <x-aura::input placeholder="johndoe" />
</x-aura::field>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Field Wrapper">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::field label="Username" hint="Enter a unique handle" required>
                    <x-aura::input placeholder="johndoe" />
                </x-aura::field>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::field label="Username" hint="Enter a unique handle" required>
    <x-aura::input placeholder="johndoe" />
</x-aura::field>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
