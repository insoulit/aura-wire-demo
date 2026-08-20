<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::flex direction="col" align="stretch" as="nav" gap="0.5">

    <x-aura::sidebar.item href="/components" icon="layers" :active="request()->is('components')">
        Overview
    </x-aura::sidebar.item>

    <x-aura::sidebar.item href="/components/installation" icon="download" :active="request()->is('components/installation')">
        Installation
    </x-aura::sidebar.item>

    <x-aura::sidebar.item href="/components/icon-library" icon="sparkles" :active="request()->is('components/icon-library', 'components/icons')">
        Icon Library
    </x-aura::sidebar.item>

    <!-- Category Separator -->
    <x-aura::separator />

    <!-- 1. Typography Dropdown -->
    <x-aura::sidebar.dropdown label="Typography" icon="type" :active="request()->is('components/kicker', 'components/display', 'components/heading', 'components/subheading', 'components/lead', 'components/text', 'components/blockquote', 'components/inline-code', 'components/kbd')">

        <x-aura::sidebar.item href="/components/kicker" :active="request()->is('components/kicker')">
            Kicker
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/display" :active="request()->is('components/display')">
            Display
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/heading" :active="request()->is('components/heading')">
            Heading
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/subheading" :active="request()->is('components/subheading')">
            Subheading
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/lead" :active="request()->is('components/lead')">
            Lead
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/text" :active="request()->is('components/text')">
            Text
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/blockquote" :active="request()->is('components/blockquote')">
            Blockquote
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/inline-code" :active="request()->is('components/inline-code')">
            Inline Code
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/kbd" :active="request()->is('components/kbd')">
            Keyboard (Kbd)
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

    <!-- 2. Action Dropdown -->
    <x-aura::sidebar.dropdown label="Action" icon="mouse-pointer-click" :active="request()->is('components/button', 'components/icon-button', 'components/button-group', 'components/link', 'components/dropdown')">

        <x-aura::sidebar.item href="/components/button" :active="request()->is('components/button')">
            Button
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/icon-button" :active="request()->is('components/icon-button')">
            Icon Button
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/button-group" :active="request()->is('components/button-group')">
            Group
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/link" :active="request()->is('components/link')">
            Link
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/dropdown" :active="request()->is('components/dropdown')">
            Dropdown
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

    <!-- 3. Form Dropdown -->
    <x-aura::sidebar.dropdown label="Form" icon="pencil" :active="request()->is('components/field', 'components/label', 'components/error', 'components/input', 'components/textarea', 'components/rich-text', 'components/pin-code', 'components/select', 'components/combobox', 'components/date-picker', 'components/checkbox', 'components/radio', 'components/switch', 'components/rating', 'components/file-upload')">

        <x-aura::sidebar.item href="/components/field" :active="request()->is('components/field')">
            Field
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/label" :active="request()->is('components/label')">
            Label
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/error" :active="request()->is('components/error')">
            Error
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/input" :active="request()->is('components/input')">
            Input
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/textarea" :active="request()->is('components/textarea')">
            Textarea
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/rich-text" :active="request()->is('components/rich-text')">
            Rich Text
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/pin-code" :active="request()->is('components/pin-code')">
            Pin Code
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/select" :active="request()->is('components/select')">
            Select
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/combobox" :active="request()->is('components/combobox')">
            Combobox
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/date-picker" :active="request()->is('components/date-picker')">
            Date Picker
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/checkbox" :active="request()->is('components/checkbox')">
            Checkbox
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/radio" :active="request()->is('components/radio')">
            Radio
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/switch" :active="request()->is('components/switch')">
            Switch
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/rating" :active="request()->is('components/rating')">
            Rating
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/file-upload" :active="request()->is('components/file-upload')">
            Upload
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

    <!-- 4. Display Dropdown -->
    <x-aura::sidebar.dropdown label="Display" icon="layout" :active="request()->is('components/card', 'components/tabs', 'components/accordion', 'components/avatar', 'components/badge', 'components/icon', 'components/animate', 'components/tag', 'components/separator', 'components/progress-bar', 'components/skeleton', 'components/empty-state')">

        <x-aura::sidebar.item href="/components/card" :active="request()->is('components/card')">
            Card
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/tabs" :active="request()->is('components/tabs')">
            Tabs
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/accordion" :active="request()->is('components/accordion')">
            Accordion
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/avatar" :active="request()->is('components/avatar')">
            Avatar
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/badge" :active="request()->is('components/badge')">
            Badge
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/icon" :active="request()->is('components/icon')">
            Icon
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/animate" :active="request()->is('components/animate')">
            Animate
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/tag" :active="request()->is('components/tag')">
            Tag
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/separator" :active="request()->is('components/separator')">
            Separator
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/progress-bar" :active="request()->is('components/progress-bar')">
            Progress
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/skeleton" :active="request()->is('components/skeleton')">
            Skeleton
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/empty-state" :active="request()->is('components/empty-state')">
            Empty
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

    <!-- 5. Data Dropdown -->
    <x-aura::sidebar.dropdown label="Data" icon="database" :active="request()->is('components/table', 'components/stat', 'components/timeline', 'components/code', 'components/list', 'components/numbered-list')">

        <x-aura::sidebar.item href="/components/table" :active="request()->is('components/table')">
            Table
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/stat" :active="request()->is('components/stat')">
            Stat
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/timeline" :active="request()->is('components/timeline')">
            Timeline
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/code" :active="request()->is('components/code')">
            Code
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/list" :active="request()->is('components/list')">
            List
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/numbered-list" :active="request()->is('components/numbered-list')">
            Numbered List
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

    <!-- 6. Feedback Dropdown -->
    <x-aura::sidebar.dropdown label="Feedback" icon="message-square" :active="request()->is('components/alert', 'components/banner', 'components/toast', 'components/modal', 'components/sheet', 'components/command', 'components/popover', 'components/tooltip', 'components/spinner')">

        <x-aura::sidebar.item href="/components/alert" :active="request()->is('components/alert')">
            Alert
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/banner" :active="request()->is('components/banner')">
            Banner
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/toast" :active="request()->is('components/toast')">
            Toast
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/modal" :active="request()->is('components/modal')">
            Modal
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/sheet" :active="request()->is('components/sheet')">
            Sheet
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/command" :active="request()->is('components/command')">
            Command
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/popover" :active="request()->is('components/popover')">
            Popover
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/tooltip" :active="request()->is('components/tooltip')">
            Tooltip
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/spinner" :active="request()->is('components/spinner')">
            Spinner
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

    <!-- 7. Navigation Dropdown -->
    <x-aura::sidebar.dropdown label="Navigation" icon="compass" :active="request()->is('components/breadcrumb', 'components/stepper', 'components/pagination')">

        <x-aura::sidebar.item href="/components/breadcrumb" :active="request()->is('components/breadcrumb')">
            Breadcrumb
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/stepper" :active="request()->is('components/stepper')">
            Stepper
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/pagination" :active="request()->is('components/pagination')">
            Pagination
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

    <!-- 8. Layout Dropdown -->
    <x-aura::sidebar.dropdown label="Layout" icon="sidebar" :active="request()->is('components/container', 'components/grid', 'components/flex', 'components/center', 'components/header', 'components/navbar', 'components/sidebar', 'components/main', 'components/footer', 'components/body')">

        <x-aura::sidebar.item href="/components/container" :active="request()->is('components/container')">
            Container
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/grid" :active="request()->is('components/grid')">
            Grid
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/flex" :active="request()->is('components/flex')">
            Flex
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/center" :active="request()->is('components/center')">
            Center
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/header" :active="request()->is('components/header')">
            Header
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/navbar" :active="request()->is('components/navbar')">
            Navbar
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/sidebar" :active="request()->is('components/sidebar')">
            Sidebar
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/main" :active="request()->is('components/main')">
            Main
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/footer" :active="request()->is('components/footer')">
            Footer
        </x-aura::sidebar.item>

        <x-aura::sidebar.item href="/components/body" :active="request()->is('components/body')">
            Body
        </x-aura::sidebar.item>

    </x-aura::sidebar.dropdown>

</x-aura::flex>
