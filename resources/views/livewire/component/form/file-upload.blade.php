<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('File Upload - Aura Wire')] 
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
            <x-aura::heading level="1" size="xl">File Upload</x-aura::heading>
            <x-aura::subheading size="md">
                Drag-and-drop file upload zones supporting preview lists, size restrictions, and multiple files.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::file-upload label="Click or drag and drop" hint="PNG, JPG, PDF (max 10MB)" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Default Dropzone --}}
    <x-aura::code  title="Default File Upload Dropzone">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::file-upload label="Click to upload or drag and drop" hint="SVG, PNG, JPG, GIF or PDF (max 10MB)" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::file-upload
    label="Click to upload or drag and drop"
    hint="SVG, PNG, JPG, GIF or PDF (max 10MB)"
/>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Disabled State --}}
    <x-aura::code  title="Disabled State">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::file-upload label="Upload disabled" hint="File uploads are currently locked" :disabled="true" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::file-upload
    label="Upload disabled"
    hint="File uploads are currently locked"
    :disabled="true"
/>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
