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
            <a href="/components/heading" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Heading</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::heading&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/subheading" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Subheading</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::subheading&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/kicker" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Kicker</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::kicker&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/text" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Text</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::text&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>
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
            <a href="/components/container" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Container</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::container&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/body" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Body</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::body&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/header" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Header</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::header&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/sidebar" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Sidebar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::sidebar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/main" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Main</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::main&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/navbar" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Navbar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::navbar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/footer" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Footer</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::footer&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>
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
            <a href="/components/button" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Button</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/button-group" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Button Group</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::button.group&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/icon-button" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Icon Button</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::icon-button&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/dropdown" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Dropdown</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::dropdown&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>
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
            <a href="/components/input" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Input</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::input&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/textarea" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Textarea</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::textarea&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/rich-text" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Rich Text</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::rich-text&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/select" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Select</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::select&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/checkbox" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Checkbox</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::checkbox&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/radio" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Radio</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::radio&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/switch" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Switch</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::switch&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/field" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Field</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::field&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/label" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Label</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::label&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/file-upload" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">File Upload</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::file-upload&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/pin-code" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">PIN Code</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::pin-code&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/error" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Error</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::error&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/combobox" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Combobox</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::combobox&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/date-picker" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Date Picker</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::date-picker&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/rating" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Rating</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::rating&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>
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
            <a href="/components/accordion" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Accordion</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::accordion&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/avatar" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Avatar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::avatar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/badge" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Badge</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::badge&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/card" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::card&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/code" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Code</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::code&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/empty-state" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Empty State</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::empty-state&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/numbered-list" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Numbered List</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::numbered-list&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/list" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">List</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::list&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/product-card" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Product Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::product-card&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/progress-bar" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Progress Bar</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::progress-bar&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/separator" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Separator</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::separator&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/skeleton" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Skeleton</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::skeleton&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/stat" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Stat Card</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::stat&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/table" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Table</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::table&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/tabs" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Tabs</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tab&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/tag" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Tag</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tag&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/timeline" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Timeline</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::timeline&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/icon" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Icon (Lucide)</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::icon&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>
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
            <a href="/components/breadcrumb" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Breadcrumb</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::breadcrumb&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/pagination" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Pagination</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::pagination&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/stepper" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Stepper</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::stepper&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>
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
            <a href="/components/alert" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Alert</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::alert&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/command" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Command Palette</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::command&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/modal" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Modal</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::modal&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/popover" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Popover</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::popover&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/sheet" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Sheet Drawer</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::sheet&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/spinner" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Spinner</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::spinner&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/toast" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Toast</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::toast&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>

            <a href="/components/tooltip" class="p-5 rounded-xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-900 dark:hover:border-white hover:shadow-lg transition-all shadow-xs flex flex-col justify-between group">
                <div>
                    <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">Tooltip</x-aura::heading>
                    <x-aura::text variant="mono" size="xs" class="mt-1">&lt;x-aura::tooltip&gt;</x-aura::text>
                </div>
                <x-aura::text variant="accent" size="xs" weight="semibold" class="mt-4 flex items-center gap-1 text-zinc-900 dark:text-white">View Component &rarr;</x-aura::text>
            </a>
        </div>
    </section>
</div>
