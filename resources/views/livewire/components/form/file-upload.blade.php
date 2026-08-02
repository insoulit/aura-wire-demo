<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('File Upload Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">File Upload Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::file-upload&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Default Dropzone --}}
    <x-aura::code title="Default File Upload Dropzone">
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
    <x-aura::code title="Disabled State">
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
