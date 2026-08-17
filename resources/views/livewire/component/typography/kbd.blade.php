<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Keyboard — Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">

    <!-- Header -->
    <x-aura::card>

        <x-aura::stack gap="2" class="max-w-2xl">

            <x-aura::flex align="center" gap="2.5">

                <x-aura::kicker>Typography</x-aura::kicker>

                <x-aura::badge variant="subtle" size="md">Component</x-aura::badge>

            </x-aura::flex>

            <x-aura::heading level="1" size="xl">Keyboard</x-aura::heading>

            <x-aura::subheading size="md">
                Keyboard keycap component designed to display single shortcuts, key sequences, and command combinations with 3D tactile elevation.
            </x-aura::subheading>

        </x-aura::stack>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>@verbatim<x-aura::kbd>⌘K</x-aura::kbd>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Common Keyboard Shortcut Combinations -->
    <x-aura::code title="1. Common Shortcut Combinations">

        <x-slot:preview>

            <div class="space-y-4 max-w-md w-full">

                <div class="flex items-center justify-between p-3 rounded-xl bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800">

                    <x-aura::text size="sm" weight="medium">Open Command Palette</x-aura::text>

                    <div class="flex items-center gap-1">

                        <x-aura::kbd>⌘</x-aura::kbd>

                        <x-aura::kbd>K</x-aura::kbd>

                    </div>

                </div>

                <div class="flex items-center justify-between p-3 rounded-xl bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800">

                    <x-aura::text size="sm" weight="medium">Quick Save File</x-aura::text>

                    <div class="flex items-center gap-1">

                        <x-aura::kbd>Ctrl</x-aura::kbd>

                        <x-aura::kbd>S</x-aura::kbd>

                    </div>

                </div>

                <div class="flex items-center justify-between p-3 rounded-xl bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800">

                    <x-aura::text size="sm" weight="medium">Close Active Modal</x-aura::text>

                    <x-aura::kbd>Esc</x-aura::kbd>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim{{-- Command Palette Shortcut --}}
<div class="flex items-center gap-1">
    <x-aura::kbd>⌘</x-aura::kbd>
    <x-aura::kbd>K</x-aura::kbd>
</div>

{{-- Save File Shortcut --}}
<div class="flex items-center gap-1">
    <x-aura::kbd>Ctrl</x-aura::kbd>
    <x-aura::kbd>S</x-aura::kbd>
</div>

{{-- Escape Key --}}
<x-aura::kbd>Esc</x-aura::kbd>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Style Variants -->
    <x-aura::code title="2. Style Variants (default, outline, solid)">

        <x-slot:preview>

            <div class="flex flex-wrap items-center gap-6">

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="neutral" size="sm">default</x-aura::badge>

                    <x-aura::kbd variant="default">⌘K</x-aura::kbd>

                </div>

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="subtle" size="sm">outline</x-aura::badge>

                    <x-aura::kbd variant="outline">⌘K</x-aura::kbd>

                </div>

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="neutral" size="sm">solid</x-aura::badge>

                    <x-aura::kbd variant="solid">⌘K</x-aura::kbd>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::kbd variant="default">⌘K</x-aura::kbd>

<x-aura::kbd variant="outline">⌘K</x-aura::kbd>

<x-aura::kbd variant="solid">⌘K</x-aura::kbd>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Scales (xs, sm, md, lg) -->
    <x-aura::code title="3. Size Scales (xs, sm, md, lg)">

        <x-slot:preview>

            <div class="flex flex-wrap items-center gap-6">

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="subtle" size="md">size="lg"</x-aura::badge>

                    <x-aura::kbd size="lg">Shift</x-aura::kbd>

                </div>

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="subtle" size="md">size="md"</x-aura::badge>

                    <x-aura::kbd size="md">Shift</x-aura::kbd>

                </div>

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="subtle" size="md">size="sm" (Default)</x-aura::badge>

                    <x-aura::kbd size="sm">Shift</x-aura::kbd>

                </div>

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="subtle" size="md">size="xs"</x-aura::badge>

                    <x-aura::kbd size="xs">Shift</x-aura::kbd>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::kbd size="lg">Shift</x-aura::kbd>

<x-aura::kbd size="md">Shift</x-aura::kbd>

<x-aura::kbd size="sm">Shift</x-aura::kbd>

<x-aura::kbd size="xs">Shift</x-aura::kbd>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

</x-aura::stack>
