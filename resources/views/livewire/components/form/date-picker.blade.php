<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Date Picker - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Form Controls</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Date Picker</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Interactive calendar popover date selection control with default friendly date formatting (<code class="text-xs bg-zinc-100 dark:bg-zinc-800 px-2 py-0.5 rounded">May 4, YYYY</code>).
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::date-picker&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Default Format (May 4, YYYY) -->
    <x-aura::code class="w-full" title="1. Default Formatted Date (MMMM D, YYYY)">
        <x-slot:preview>
            <div class="w-full max-w-sm py-4 pb-64">
                <x-aura::date-picker label="Select Target Date" value="2026-05-04" name="target_date" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::date-picker label="Select Target Date" value="2026-05-04" name="target_date" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Abbreviated Month Name (MMM D, YYYY) -->
    <x-aura::code class="w-full" title="2. Abbreviated Month Format (MMM D, YYYY)">
        <x-slot:preview>
            <div class="w-full max-w-sm py-4 pb-64">
                <x-aura::date-picker label="Project Launch Date" value="2026-09-15" format="MMM D, YYYY" name="launch_date" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::date-picker label="Project Launch Date" value="2026-09-15" format="MMM D, YYYY" name="launch_date" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Regional Formats (DD-MM-YYYY vs YYYY-MM-DD vs MM/DD/YYYY) -->
    <x-aura::code class="w-full" title="3. Regional Formats (DD-MM-YYYY vs YYYY-MM-DD vs MM/DD/YYYY)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full max-w-2xl py-4 pb-64">
                <x-aura::date-picker label="DD-MM-YYYY" value="2026-12-25" format="DD-MM-YYYY" name="eu_hyphen" />
                <x-aura::date-picker label="YYYY-MM-DD" value="2026-12-25" format="YYYY-MM-DD" name="iso_date" />
                <x-aura::date-picker label="MM/DD/YYYY" value="2026-12-25" format="MM/DD/YYYY" name="us_date" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::date-picker label="DD-MM-YYYY" value="2026-12-25" format="DD-MM-YYYY" /&gt;
&lt;x-aura::date-picker label="YYYY-MM-DD" value="2026-12-25" format="YYYY-MM-DD" /&gt;
&lt;x-aura::date-picker label="MM/DD/YYYY" value="2026-12-25" format="MM/DD/YYYY" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
