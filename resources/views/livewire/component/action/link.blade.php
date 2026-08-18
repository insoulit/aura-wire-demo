<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Link - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Action</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Link</x-aura::heading>
            <x-aura::subheading size="md">
                Lightweight inline navigation links with variant styling, auto detected external indicators, optional icons, and configurable underline behavior.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::link href="/docs" variant="default" icon="book-open">Documentation</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Link Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::link href="#">Default</x-aura::link>
                <x-aura::link href="#" variant="subtle">Subtle</x-aura::link>
                <x-aura::link href="#" variant="primary">Primary</x-aura::link>
                <x-aura::link href="#" variant="danger">Danger</x-aura::link>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::link href="#">Default</x-aura::link>
<x-aura::link href="#" variant="subtle">Subtle</x-aura::link>
<x-aura::link href="#" variant="primary">Primary</x-aura::link>
<x-aura::link href="#" variant="danger">Danger</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Link Sizes (xs, sm, md, lg)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::link href="#" size="xs">Extra Small</x-aura::link>
                <x-aura::link href="#" size="sm">Small</x-aura::link>
                <x-aura::link href="#" size="md">Medium</x-aura::link>
                <x-aura::link href="#" size="lg">Large</x-aura::link>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::link href="#" size="xs">Extra Small</x-aura::link>
<x-aura::link href="#" size="sm">Small</x-aura::link>
<x-aura::link href="#" size="md">Medium</x-aura::link>
<x-aura::link href="#" size="lg">Large</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. With Icons -->
    <x-aura::code title="3. Links with Icons">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::link href="#" icon="book-open">Documentation</x-aura::link>
                <x-aura::link href="#" icon="settings">Settings</x-aura::link>
                <x-aura::link href="#" icon-trailing="arrow-right">Next Page</x-aura::link>
                <x-aura::link href="#" icon="download" icon-trailing="arrow-down">Download Report</x-aura::link>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::link href="#" icon="book-open">Documentation</x-aura::link>
<x-aura::link href="#" icon="settings">Settings</x-aura::link>
<x-aura::link href="#" icon-trailing="arrow-right">Next Page</x-aura::link>
<x-aura::link href="#" icon="download" icon-trailing="arrow-down">Download Report</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. External Links -->
    <x-aura::code title="4. External Links (Auto Detected)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::link href="https://github.com" target="_blank">GitHub</x-aura::link>
                <x-aura::link href="https://packagist.org" target="_blank" variant="primary">Packagist</x-aura::link>
                <x-aura::link href="https://laravel.com" target="_blank" variant="subtle">Laravel Docs</x-aura::link>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim{{-- External icon and rel="noopener noreferrer" are auto-added --}}
<x-aura::link href="https://github.com" target="_blank">GitHub</x-aura::link>
<x-aura::link href="https://packagist.org" target="_blank" variant="primary">Packagist</x-aura::link>
<x-aura::link href="https://laravel.com" target="_blank" variant="subtle">Laravel Docs</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Underline Styles -->
    <x-aura::code title="5. Underline Behavior">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::link href="#" underline="hover">Hover (Default)</x-aura::link>
                <x-aura::link href="#" underline="always">Always Visible</x-aura::link>
                <x-aura::link href="#" underline="none">No Underline</x-aura::link>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::link href="#" underline="hover">Hover (Default)</x-aura::link>
<x-aura::link href="#" underline="always">Always Visible</x-aura::link>
<x-aura::link href="#" underline="none">No Underline</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 6. Font Weights -->
    <x-aura::code title="6. Font Weights">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::link href="#" weight="normal">Normal</x-aura::link>
                <x-aura::link href="#" weight="medium">Medium</x-aura::link>
                <x-aura::link href="#" weight="semibold">Semibold</x-aura::link>
                <x-aura::link href="#" weight="bold">Bold</x-aura::link>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::link href="#" weight="normal">Normal</x-aura::link>
<x-aura::link href="#" weight="medium">Medium</x-aura::link>
<x-aura::link href="#" weight="semibold">Semibold</x-aura::link>
<x-aura::link href="#" weight="bold">Bold</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 7. Disabled State -->
    <x-aura::code title="7. Disabled Link">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::link href="#" :disabled="true">Disabled Link</x-aura::link>
                <x-aura::link href="#" :disabled="true" variant="primary" icon="lock">Locked Feature</x-aura::link>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::link href="#" :disabled="true">Disabled Link</x-aura::link>
<x-aura::link href="#" :disabled="true" variant="primary" icon="lock">Locked Feature</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 8. Real World Patterns -->
    <x-aura::code title="8. Real World Usage Patterns">
        <x-slot:preview>
            <div class="w-full space-y-6">
                <!-- Inline Text Pattern -->
                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
                    <x-aura::text size="sm">
                        By continuing, you agree to our
                        <x-aura::link href="#" variant="primary" underline="always">Terms of Service</x-aura::link>
                        and
                        <x-aura::link href="#" variant="primary" underline="always">Privacy Policy</x-aura::link>.
                    </x-aura::text>
                </div>

                <!-- Breadcrumb-style Navigation -->
                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800">
                    <div class="flex items-center gap-2 text-sm">
                        <x-aura::link href="#" variant="subtle" size="sm">Home</x-aura::link>
                        <span class="text-zinc-400"><x-aura::icon name="chevron-right" size="xs" /></span>
                        <x-aura::link href="#" variant="subtle" size="sm">Components</x-aura::link>
                        <span class="text-zinc-400"><x-aura::icon name="chevron-right" size="xs" /></span>
                        <x-aura::text size="sm" weight="semibold">Link</x-aura::text>
                    </div>
                </div>

                <!-- Card Footer Actions -->
                <x-aura::card>
                    <div class="flex items-center justify-between">
                        <div>
                            <x-aura::heading level="3" size="sm">Project Settings</x-aura::heading>
                            <x-aura::text size="sm" variant="subtle">Configure your project preferences.</x-aura::text>
                        </div>
                        <div class="flex items-center gap-4">
                            <x-aura::link href="#" variant="subtle" size="sm" icon="eye">Preview</x-aura::link>
                            <x-aura::link href="#" variant="primary" size="sm" icon="settings">Manage</x-aura::link>
                        </div>
                    </div>
                </x-aura::card>

                <!-- Help Text with External Links -->
                <div class="p-4 rounded-xl bg-indigo-50 dark:bg-indigo-950/30 border border-indigo-200 dark:border-indigo-800/50">
                    <div class="flex items-start gap-3">
                        <div class="p-1.5 rounded-lg bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 shrink-0">
                            <x-aura::icon name="info" size="sm" />
                        </div>
                        <div class="space-y-1.5">
                            <x-aura::text size="sm" weight="semibold">Need help?</x-aura::text>
                            <x-aura::text size="sm" variant="subtle">
                                Check out our
                                <x-aura::link href="https://github.com" target="_blank" variant="primary" size="sm">GitHub repository</x-aura::link>
                                or read the
                                <x-aura::link href="#" variant="primary" size="sm" icon="book-open">documentation</x-aura::link>
                                for more details.
                            </x-aura::text>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim{{-- Inline in text --}}
<x-aura::text size="sm">
    By continuing, you agree to our
    <x-aura::link href="#" variant="primary" underline="always">Terms of Service</x-aura::link>
    and
    <x-aura::link href="#" variant="primary" underline="always">Privacy Policy</x-aura::link>.
</x-aura::text>

{{-- Card footer actions --}}
<div class="flex items-center gap-4">
    <x-aura::link href="#" variant="subtle" size="sm" icon="eye">Preview</x-aura::link>
    <x-aura::link href="#" variant="primary" size="sm" icon="settings">Manage</x-aura::link>
</div>

{{-- External link (auto-detects target="_blank") --}}
<x-aura::link href="https://github.com" target="_blank" variant="primary">GitHub</x-aura::link>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
