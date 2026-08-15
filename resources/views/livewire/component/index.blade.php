<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Component Directory - Aura Wire')] 
class extends Component {};

?>

<div class="w-full space-y-12">
    <!-- Header Banner -->
    <x-aura::card>
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
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="type" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Typography</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">5 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/kicker">
                <x-aura::heading level="3" size="sm">Kicker</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::kicker&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/display">
                <x-aura::heading level="3" size="sm">Display</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::display&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/heading">
                <x-aura::heading level="3" size="sm">Heading</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::heading&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/subheading">
                <x-aura::heading level="3" size="sm">Subheading</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::subheading&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/text">
                <x-aura::heading level="3" size="sm">Text</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::text&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 2: Action -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="mouse-pointer" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Action</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">5 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/button">
                <x-aura::heading level="3" size="sm">Button</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::button&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/icon-button">
                <x-aura::heading level="3" size="sm">Icon Button</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::icon-button&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/button-group">
                <x-aura::heading level="3" size="sm">Button Group</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::button.group&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/link">
                <x-aura::heading level="3" size="sm">Link</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::link&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/dropdown">
                <x-aura::heading level="3" size="sm">Dropdown</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::dropdown&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 3: Form -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="edit-3" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Form</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">15 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/field">
                <x-aura::heading level="3" size="sm">Field</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::field&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/label">
                <x-aura::heading level="3" size="sm">Label</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::label&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/error">
                <x-aura::heading level="3" size="sm">Error</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::error&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/input">
                <x-aura::heading level="3" size="sm">Input</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::input&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/textarea">
                <x-aura::heading level="3" size="sm">Textarea</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::textarea&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/rich-text">
                <x-aura::heading level="3" size="sm">Rich Text</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::rich-text&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/pin-code">
                <x-aura::heading level="3" size="sm">Pin Code</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::pin-code&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/select">
                <x-aura::heading level="3" size="sm">Select</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::select&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/combobox">
                <x-aura::heading level="3" size="sm">Combobox</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::combobox&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/date-picker">
                <x-aura::heading level="3" size="sm">Date Picker</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::date-picker&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/checkbox">
                <x-aura::heading level="3" size="sm">Checkbox</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::checkbox&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/radio">
                <x-aura::heading level="3" size="sm">Radio</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::radio&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/switch">
                <x-aura::heading level="3" size="sm">Switch</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::switch&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/rating">
                <x-aura::heading level="3" size="sm">Rating</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::rating&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/file-upload">
                <x-aura::heading level="3" size="sm">File Upload</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::file-upload&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 4: Display -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="monitor" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Display</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">10 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/card">
                <x-aura::heading level="3" size="sm">Card</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::card&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/tabs">
                <x-aura::heading level="3" size="sm">Tabs</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::tab&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/accordion">
                <x-aura::heading level="3" size="sm">Accordion</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::accordion&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/avatar">
                <x-aura::heading level="3" size="sm">Avatar</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::avatar&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/badge">
                <x-aura::heading level="3" size="sm">Badge</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::badge&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/tag">
                <x-aura::heading level="3" size="sm">Tag</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::tag&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/separator">
                <x-aura::heading level="3" size="sm">Separator</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::separator&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/progress-bar">
                <x-aura::heading level="3" size="sm">Progress Bar</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::progress-bar&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/skeleton">
                <x-aura::heading level="3" size="sm">Skeleton</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::skeleton&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/empty-state">
                <x-aura::heading level="3" size="sm">Empty State</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::empty-state&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 5: Data -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="database" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Data</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">6 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/table">
                <x-aura::heading level="3" size="sm">Table</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::table&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/stat">
                <x-aura::heading level="3" size="sm">Stat</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::stat&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/timeline">
                <x-aura::heading level="3" size="sm">Timeline</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::timeline&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/code">
                <x-aura::heading level="3" size="sm">Code</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::code&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/list">
                <x-aura::heading level="3" size="sm">List</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::list&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/numbered-list">
                <x-aura::heading level="3" size="sm">Numbered List</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::numbered-list&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 6: Feedback -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="bell" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Feedback</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">9 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/alert">
                <x-aura::heading level="3" size="sm">Alert</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::alert&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/banner">
                <x-aura::heading level="3" size="sm">Banner</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::banner&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/toast">
                <x-aura::heading level="3" size="sm">Toast</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::toast&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/modal">
                <x-aura::heading level="3" size="sm">Modal</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::modal&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/sheet">
                <x-aura::heading level="3" size="sm">Sheet Drawer</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::sheet&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/command">
                <x-aura::heading level="3" size="sm">Command Palette</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::command&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/popover">
                <x-aura::heading level="3" size="sm">Popover</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::popover&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/tooltip">
                <x-aura::heading level="3" size="sm">Tooltip</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::tooltip&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/spinner">
                <x-aura::heading level="3" size="sm">Spinner</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::spinner&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 7: Navigation -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="navigation" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Navigation</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">3 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/breadcrumb">
                <x-aura::heading level="3" size="sm">Breadcrumb</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::breadcrumb&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/stepper">
                <x-aura::heading level="3" size="sm">Stepper</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::stepper&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/pagination">
                <x-aura::heading level="3" size="sm">Pagination</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::pagination&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

    <!-- Category 8: Layout -->
    <section class="space-y-4">
        <div class="flex items-center gap-2 border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <div class="text-zinc-900 dark:text-white">
                <x-aura::icon name="layout" size="sm" />
            </div>
            <x-aura::heading level="2" size="md">Layout</x-aura::heading>
            <div class="ml-auto">
                <x-aura::badge variant="neutral">7 Components</x-aura::badge>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 [&>:nth-child(3n+1):last-child]:lg:col-span-3 [&>:nth-child(3n+2):last-child]:lg:col-span-2 [&>:nth-child(2n+1):last-child]:sm:max-lg:col-span-2">
            <x-aura::card href="/components/body">
                <x-aura::heading level="3" size="sm">Body</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::body&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/container">
                <x-aura::heading level="3" size="sm">Container</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::container&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/header">
                <x-aura::heading level="3" size="sm">Header</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::header&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/navbar">
                <x-aura::heading level="3" size="sm">Navbar</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::navbar&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/sidebar">
                <x-aura::heading level="3" size="sm">Sidebar</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::sidebar&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/main">
                <x-aura::heading level="3" size="sm">Main</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::main&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/footer">
                <x-aura::heading level="3" size="sm">Footer</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::footer&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </section>

</div>
