<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('File Upload - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">File Upload</x-aura::heading>
            <x-aura::subheading size="md">
                Drag-and-drop file upload zones supporting preview lists, size restrictions, and multiple files.
            </x-aura::subheading>
        </div>
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
</div>
