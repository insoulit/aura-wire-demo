<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Combobox - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Combobox</x-aura::heading>
            <x-aura::subheading size="md">
                Searchable select dropdown controls with live query filtering, keyboard accessibility, and direct inline options data.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::combobox wire:model="framework" label="Framework" :options="$options" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Inline Country Options -->
    <x-aura::code class="w-full" title="1. Inline Country Array Options">
        <x-slot:preview>
            <div class="w-full max-w-sm py-4 pb-52">
                <x-aura::combobox
                    label="Select Country"
                    :options="[
                        ['value' => 'us', 'label' => 'United States'],
                        ['value' => 'ca', 'label' => 'Canada'],
                        ['value' => 'uk', 'label' => 'United Kingdom'],
                        ['value' => 'de', 'label' => 'Germany'],
                        ['value' => 'jp', 'label' => 'Japan'],
                        ['value' => 'au', 'label' => 'Australia']
                    ]"
                    name="country"
                    placeholder="Search country..."
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::combobox
    label="Select Country"
    :options="[
        ['value' => 'us', 'label' => 'United States'],
        ['value' => 'ca', 'label' => 'Canada'],
        ['value' => 'uk', 'label' => 'United Kingdom'],
        ['value' => 'de', 'label' => 'Germany'],
        ['value' => 'jp', 'label' => 'Japan'],
        ['value' => 'au', 'label' => 'Australia']
    ]"
    name="country"
    placeholder="Search country..."
/&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Associative Key-Value Inline Options -->
    <x-aura::code class="w-full" title="2. Associative Key-Value Inline Options">
        <x-slot:preview>
            <div class="w-full max-w-sm py-4 pb-52">
                <x-aura::combobox
                    label="Account Timezone"
                    :options="[
                        'UTC' => '(UTC+00:00) UTC Universal Time',
                        'EST' => '(UTC-05:00) Eastern Time (US & Canada)',
                        'PST' => '(UTC-08:00) Pacific Time (US & Canada)',
                        'CET' => '(UTC+01:00) Central European Time'
                    ]"
                    value="EST"
                    name="timezone"
                    placeholder="Choose timezone..."
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::combobox
    label="Account Timezone"
    :options="[
        'UTC' => '(UTC+00:00) UTC Universal Time',
        'EST' => '(UTC-05:00) Eastern Time (US & Canada)',
        'PST' => '(UTC-08:00) Pacific Time (US & Canada)',
        'CET' => '(UTC+01:00) Central European Time'
    ]"
    value="EST"
    name="timezone"
/&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Team Member Selector -->
    <x-aura::code class="w-full" title="3. Assignee Team Member Picker">
        <x-slot:preview>
            <div class="w-full max-w-sm py-4 pb-52">
                <x-aura::combobox
                    label="Assign Task To"
                    :options="[
                        ['value' => 'alex', 'label' => 'Alex Rivera (Lead Engineer)'],
                        ['value' => 'sarah', 'label' => 'Sarah Chen (UI/UX Designer)'],
                        ['value' => 'michael', 'label' => 'Michael Scott (Product Manager)']
                    ]"
                    value="alex"
                    name="assignee"
                    placeholder="Search team member..."
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::combobox
    label="Assign Task To"
    :options="[
        ['value' => 'alex', 'label' => 'Alex Rivera (Lead Engineer)'],
        ['value' => 'sarah', 'label' => 'Sarah Chen (UI/UX Designer)'],
        ['value' => 'michael', 'label' => 'Michael Scott (Product Manager)']
    ]"
    value="alex"
    name="assignee"
/&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
