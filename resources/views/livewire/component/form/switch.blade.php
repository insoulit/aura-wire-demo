<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Switch - Aura Wire')] 
class extends Component {
    public bool $enabled = false;
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
            <x-aura::heading level="1" size="xl">Switch</x-aura::heading>
            <x-aura::subheading size="md">
                Interactive toggle switches for binary settings and real time state preferences.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::switch wire:model="enabled" label="Enable Notifications" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Toggle Switch">
        <x-slot:preview>
            <div class="flex items-center gap-4">
                <x-aura::switch wire:model="enabled" label="Enable Notifications" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::switch wire:model="enabled" label="Enable Notifications" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>
