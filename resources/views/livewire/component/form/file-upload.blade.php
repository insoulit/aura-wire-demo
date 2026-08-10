<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('File Upload - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">File Upload</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Drag-and-drop file upload zones supporting preview lists, size restrictions, and multiple files.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::file-upload&gt;
            </code>
        </div>
    </div>

    {{-- Default Dropzone --}}
    <x-aura::code class="w-full" title="Default File Upload Dropzone">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::file-upload label="Click to upload or drag and drop" hint="SVG, PNG, JPG, GIF or PDF (max 10MB)" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::file-upload
    label="Click to upload or drag and drop"
    hint="SVG, PNG, JPG, GIF or PDF (max 10MB)"
/&gt;</x-slot:codeSlot>
    </x-aura::code>

    {{-- Disabled State --}}
    <x-aura::code class="w-full" title="Disabled State">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::file-upload label="Upload disabled" hint="File uploads are currently locked" :disabled="true" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::file-upload
    label="Upload disabled"
    hint="File uploads are currently locked"
    :disabled="true"
/&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
