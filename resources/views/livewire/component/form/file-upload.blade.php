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

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            File Upload
        </x-aura::heading>

        <x-aura::subheading size="md">
            Drag and drop file upload zones supporting preview hints, size restrictions, and multiple files.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::file-upload label="Click to upload or drag and drop" hint="PNG, JPG, PDF (max 10MB)" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Dropzone -->
    <x-aura::code title="1. Media Asset Dropzone">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::file-upload
                    label="Click to upload or drag and drop"
                    hint="SVG, PNG, JPG, GIF or PDF (max 10MB)"
                />

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

    <!-- 2. Audio and Video Upload -->
    <x-aura::code title="2. Firmware & Audio Assets Dropzone">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::file-upload
                    label="Upload lossless audio files or firmware bundles"
                    hint="WAV, FLAC, BIN, ZIP archives (up to 50MB)"
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::file-upload
                    label="Upload lossless audio files or firmware bundles"
                    hint="WAV, FLAC, BIN, ZIP archives (up to 50MB)"
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Disabled State -->
    <x-aura::code title="3. Disabled State">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::file-upload
                    label="Uploads restricted for guest role"
                    hint="Please upgrade your account to enable direct asset uploads"
                    :disabled="true"
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::file-upload
                    label="Uploads restricted for guest role"
                    hint="Please upgrade your account to enable uploads"
                    :disabled="true"
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- Component Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Component Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the file upload dropzone component.
            </x-aura::text>

        </x-aura::flex>

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Prop
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Available Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Primary instruction text inside dropzone" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        Click to upload or drag and drop
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Instruction string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            hint
                        </x-aura::text>

                        <x-aura::tooltip text="Secondary supported file extensions and size limit notice" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        SVG, PNG, JPG, GIF or PDF
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        File format hints string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            disabled
                        </x-aura::text>

                        <x-aura::tooltip text="Disable drop interaction and file input clicks" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>
