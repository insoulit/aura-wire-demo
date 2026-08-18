<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Label - Aura Wire')] 
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
            <x-aura::heading level="1" size="xl">Label</x-aura::heading>
            <x-aura::subheading size="md">
                Accessible form input labels with size variants and required asterisk badges.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::label required>Email Address</x-aura::label>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Form Label">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::label required>Email Address</x-aura::label>
                <x-aura::label>Optional Nickname</x-aura::label>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::label required>Email Address</x-aura::label>
<x-aura::label>Optional Nickname</x-aura::label>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
