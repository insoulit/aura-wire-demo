<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Date Picker - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Date Picker</x-aura::heading>
            <x-aura::subheading size="md">
                Interactive calendar popover date selection control with default friendly date formatting (May 4, YYYY).
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::date-picker wire:model="publishDate" label="Publish Date" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard Default Format (May 4, YYYY) -->
    <x-aura::code  title="1. Default Formatted Date (MMMM D, YYYY)">
        <x-slot:preview>
            <div class="w-full max-w-sm py-4 pb-64">
                <x-aura::date-picker label="Select Target Date" value="2026-05-04" name="target_date" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::date-picker label="Select Target Date" value="2026-05-04" name="target_date" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Abbreviated Month Name (MMM D, YYYY) -->
    <x-aura::code  title="2. Abbreviated Month Format (MMM D, YYYY)">
        <x-slot:preview>
            <div class="w-full max-w-sm py-4 pb-64">
                <x-aura::date-picker label="Project Launch Date" value="2026-09-15" format="MMM D, YYYY" name="launch_date" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::date-picker label="Project Launch Date" value="2026-09-15" format="MMM D, YYYY" name="launch_date" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Regional Formats (DD-MM-YYYY vs YYYY-MM-DD vs MM/DD/YYYY) -->
    <x-aura::code  title="3. Regional Formats (DD-MM-YYYY vs YYYY-MM-DD vs MM/DD/YYYY)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full max-w-2xl py-4 pb-64">
                <x-aura::date-picker label="DD-MM-YYYY" value="2026-12-25" format="DD-MM-YYYY" name="eu_hyphen" />
                <x-aura::date-picker label="YYYY-MM-DD" value="2026-12-25" format="YYYY-MM-DD" name="iso_date" />
                <x-aura::date-picker label="MM/DD/YYYY" value="2026-12-25" format="MM/DD/YYYY" name="us_date" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::date-picker label="DD-MM-YYYY" value="2026-12-25" format="DD-MM-YYYY" />
<x-aura::date-picker label="YYYY-MM-DD" value="2026-12-25" format="YYYY-MM-DD" />
<x-aura::date-picker label="MM/DD/YYYY" value="2026-12-25" format="MM/DD/YYYY" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
