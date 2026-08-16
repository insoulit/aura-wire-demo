<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Code - Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::stack gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Data</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Code</x-aura::heading>
            <x-aura::subheading size="md">
                Interactive code block component with Preview/Code tabs and clipboard copy functionality.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::code title="Example Code" language="blade">...</x-aura::code>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <x-aura::code  title="Code Block Component">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::code  title="Example Code Block" language="blade">
                    <x-slot:preview>
                        <x-aura::button variant="primary">Click Me</x-aura::button>
                    </x-slot:preview>
                    <x-slot:codeSlot>@verbatim<x-aura::button variant="primary">Click Me</x-aura::button>@endverbatim</x-slot:codeSlot>
                </x-aura::code>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::code title="Example Code Block" language="blade">
    <x-slot:preview>
        <x-aura::button variant="primary">Click Me</x-aura::button>
    </x-slot:preview>
    <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Click Me&lt;/x-aura::button&gt;</x-slot:codeSlot>
</x-aura::code>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>
