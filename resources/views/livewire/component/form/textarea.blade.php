<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Textarea - Aura Wire')] 
class extends Component {
    public string $bio = '';
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
            <x-aura::heading level="1" size="xl">Textarea</x-aura::heading>
            <x-aura::subheading size="md">
                Multi-line text input field supporting auto-resize, custom row count, labels, and error states.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Textarea Control">
        <x-slot:preview>
            <div class="w-full max-w-md">
                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::textarea wire:model="bio" rows="4" label="Biography" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>
