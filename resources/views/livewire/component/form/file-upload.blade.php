<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('File Upload — Aura Wire')] 
class extends Component {};

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
            File Upload
        </x-aura::heading>

        <x-aura::subheading size="md">
            Drag and drop file upload zones supporting preview lists, size restrictions, and multiple files.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::file-upload label="Click or drag and drop" hint="PNG, JPG, PDF (max 10MB)" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Dropzone -->
    <x-aura::code title="1. File Upload Dropzone">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::file-upload label="Click to upload or drag and drop" hint="SVG, PNG, JPG, GIF or PDF (max 10MB)" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::file-upload
                    label="Click to upload or drag and drop"
                    hint="SVG, PNG, JPG, GIF or PDF (max 10MB)"
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>
