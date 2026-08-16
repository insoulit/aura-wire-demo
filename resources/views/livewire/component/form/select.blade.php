<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Select - Aura Wire')] 
class extends Component {
    public string $selected = 'us';
};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::stack gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Select</x-aura::heading>
            <x-aura::subheading size="md">
                Native option selection dropdowns supporting option arrays, key value maps, and field validation.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::select wire:model="selected" label="Country" :options="['us' => 'United States', 'ca' => 'Canada']" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Select Input">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::select wire:model="selected" label="Country">
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="uk">United Kingdom</option>
                </x-aura::select>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::select wire:model="selected" label="Country">
    <option value="us">United States</option>
    <option value="ca">Canada</option>
</x-aura::select>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>
