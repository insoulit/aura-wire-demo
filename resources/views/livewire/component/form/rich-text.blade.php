<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Rich Text — Aura Wire')] 
class extends Component {
    public string $content = '<h3>Welcome to Aura Wire</h3><p>This is a <strong>rich text editor</strong> built directly into the component package.</p>';
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Form
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Rich Text Editor
        </x-aura::heading>

        <x-aura::subheading size="md">
            WYSIWYG rich text editor component with interactive formatting toolbar, live HTML output, and Livewire reactivity.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::rich-text wire:model="content" placeholder="Write content..." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Interactive Livewire Bindings -->
    <x-aura::code title="1. Rich Text Editor">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::field label="Article Body" hint="Format article content using the toolbar">
                    <x-aura::rich-text wire:model="content" placeholder="Start typing..." :showCount="true" minHeight="200px" />
                </x-aura::field>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::field label="Article Body" hint="Format article content using the toolbar">
                    <x-aura::rich-text wire:model="content" placeholder="Start typing..." :showCount="true" minHeight="200px" />
                </x-aura::field>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
