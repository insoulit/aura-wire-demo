<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Component Directory - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="12" class="w-full">
    <!-- Header Banner -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Component Directory</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Documentation</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Component Suite</x-aura::heading>
            <x-aura::subheading size="md">
                Browse through individual standalone documentation pages for every component registered by Aura Wire, organized by category.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Category 1: Typography -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="type" size="sm" />
                    <x-aura::heading level="2" size="md">Typography</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">9 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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

            <x-aura::card href="/components/lead">
                <x-aura::heading level="3" size="sm">Lead</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::lead&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/text">
                <x-aura::heading level="3" size="sm">Text</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::text&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/blockquote">
                <x-aura::heading level="3" size="sm">Blockquote</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::blockquote&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/inline-code">
                <x-aura::heading level="3" size="sm">Inline Code</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::inline-code&gt;</x-aura::text>
            </x-aura::card>

            <x-aura::card href="/components/kbd">
                <x-aura::heading level="3" size="sm">Keyboard</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::kbd&gt;</x-aura::text>
            </x-aura::card>
        </div>
    </x-aura::flex>

    <!-- Category 2: Action -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="mouse-pointer" size="sm" />
                    <x-aura::heading level="2" size="md">Action</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">5 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
    </x-aura::flex>

    <!-- Category 3: Form -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="edit-3" size="sm" />
                    <x-aura::heading level="2" size="md">Form</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">15 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
    </x-aura::flex>

    <!-- Category 4: Display -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="monitor" size="sm" />
                    <x-aura::heading level="2" size="md">Display</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">11 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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

            <x-aura::card href="/components/icon">
                <x-aura::heading level="3" size="sm">Icon</x-aura::heading>
                <x-aura::text variant="mono" size="sm">&lt;x-aura::icon&gt;</x-aura::text>
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
    </x-aura::flex>

    <!-- Category 5: Data -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="database" size="sm" />
                    <x-aura::heading level="2" size="md">Data</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">6 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
    </x-aura::flex>

    <!-- Category 6: Feedback -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="bell" size="sm" />
                    <x-aura::heading level="2" size="md">Feedback</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">9 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
    </x-aura::flex>

    <!-- Category 7: Navigation -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="navigation" size="sm" />
                    <x-aura::heading level="2" size="md">Navigation</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">3 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
    </x-aura::flex>

    <!-- Category 8: Layout -->
    <x-aura::flex direction="col" gap="4">
        <div class="border-b border-zinc-200/60 dark:border-zinc-800/60 pb-2">
            <x-aura::flex align="center" justify="between" gap="2">
                <x-aura::flex align="center" gap="2">
                    <x-aura::icon name="layout" size="sm" />
                    <x-aura::heading level="2" size="md">Layout</x-aura::heading>
                </x-aura::flex>
                <x-aura::badge variant="neutral" size="sm">7 Components</x-aura::badge>
            </x-aura::flex>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
    </x-aura::flex>
</x-aura::flex>
