<?php

use function Livewire\Volt\layout;
use function Livewire\Volt\title;

layout('livewire.layout.component');
title('Component Directory - Aura Wire');

?>

<div class="w-full space-y-12">
    <!-- Header Banner -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Component Directory</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">v1.5.0</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Component Suite</x-aura::heading>
            <x-aura::subheading size="md">
                Browse through individual standalone documentation pages for every component registered by Aura Wire, organized by category.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Category 1: Typography -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::icon name="type" size="sm" class="text-zinc-900 dark:text-white" />
            <x-aura::heading level="2" size="md">Typography</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">4 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <x-aura::card href="/components/heading">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Heading</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::heading&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/subheading">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Subheading</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::subheading&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/kicker">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Kicker</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::kicker&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/text">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Text</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::text&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 2: Layout & Structural -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::icon name="layout" size="sm" class="text-zinc-900 dark:text-white" />
            <x-aura::heading level="2" size="md">Layout</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">7 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <x-aura::card href="/components/container">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Container</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::container&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/body">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Body</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::body&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/header">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Header</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::header&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/sidebar">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Sidebar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::sidebar&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/main">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Main</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::main&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/navbar">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Navbar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::navbar&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/footer">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Footer</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::footer&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 3: Actions -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::icon name="mouse-pointer" size="sm" class="text-zinc-900 dark:text-white" />
            <x-aura::heading level="2" size="md">Action</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">4 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <x-aura::card href="/components/button">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Button</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/button-group">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Button Group</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button.group&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/icon-button">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Icon Button</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::icon-button&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/dropdown">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Dropdown</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::dropdown&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 4: Form Controls -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::icon name="edit-3" size="sm" class="text-zinc-900 dark:text-white" />
            <x-aura::heading level="2" size="md">Form</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">15 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <x-aura::card href="/components/input">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Input</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::input&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/textarea">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Textarea</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::textarea&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/rich-text">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Rich Text</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::rich-text&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/select">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Select</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::select&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/checkbox">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Checkbox</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::checkbox&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/radio">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Radio</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::radio&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/switch">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Switch</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::switch&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/field">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Field</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::field&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/label">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Label</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::label&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/file-upload">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">File Upload</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::file-upload&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/pin-code">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">PIN Code</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::pin-code&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/error">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Error</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::error&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/combobox">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Combobox</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::combobox&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/date-picker">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Date Picker</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::date-picker&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/rating">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Rating</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::rating&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 5: Data Display -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::icon name="monitor" size="sm" class="text-zinc-900 dark:text-white" />
            <x-aura::heading level="2" size="md">Display</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">18 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <x-aura::card href="/components/accordion">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Accordion</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::accordion&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/avatar">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Avatar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::avatar&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/badge">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Badge</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::badge&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/card">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::card&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/code">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Code</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::code&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/empty-state">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Empty State</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::empty-state&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/numbered-list">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Numbered List</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::numbered-list&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/list">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">List</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::list&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/product-card">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Product Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::product-card&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/progress-bar">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Progress Bar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::progress-bar&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/separator">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Separator</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::separator&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/skeleton">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Skeleton</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::skeleton&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/stat">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Stat Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::stat&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/table">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Table</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::table&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/tabs">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Tabs</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tab&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/tag">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Tag</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tag&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/timeline">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Timeline</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::timeline&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/icon">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Icon (Lucide)</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::icon&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 6: Navigation -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::icon name="navigation" size="sm" class="text-zinc-900 dark:text-white" />
            <x-aura::heading level="2" size="md">Navigation</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">3 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <x-aura::card href="/components/breadcrumb">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Breadcrumb</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::breadcrumb&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/pagination">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Pagination</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::pagination&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/stepper">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Stepper</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::stepper&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 7: Feedback -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::icon name="bell" size="sm" class="text-zinc-900 dark:text-white" />
            <x-aura::heading level="2" size="md">Feedback</x-aura::heading>
            <x-aura::badge variant="neutral" class="ml-auto">8 Components</x-aura::badge>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <x-aura::card href="/components/alert">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Alert</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::alert&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/command">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Command Palette</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::command&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/modal">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Modal</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::modal&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/popover">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Popover</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::popover&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/sheet">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Sheet Drawer</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::sheet&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/spinner">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Spinner</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::spinner&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/toast">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Toast</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::toast&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/tooltip">
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Tooltip</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tooltip&gt;</x-aura::text>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-auto pt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </x-aura::card>
        </div>
    </section>
</div>
