<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Inline Code — Aura Wire')] 
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

            <x-aura::heading level="1" size="xl">Inline Code</x-aura::heading>

            <x-aura::subheading size="md">
                Monospace inline code badges for displaying commands, terminal parameters, file paths, and syntax keywords within body prose.
            </x-aura::subheading>

        </x-aura::stack>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>@verbatim<x-aura::inline-code>composer require insoulit/aura-wire</x-aura::inline-code>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Inline Prose Examples -->
    <x-aura::code title="1. Inline Prose Integration">

        <x-slot:preview>

            <div class="space-y-3 max-w-2xl w-full">

                <x-aura::text size="sm">
                    Run <x-aura::inline-code>composer require insoulit/aura-wire</x-aura::inline-code> to install package dependencies into your Laravel app.
                </x-aura::text>

                <x-aura::text size="sm">
                    Open your <x-aura::inline-code>config/app.php</x-aura::inline-code> file and verify that the provider is registered.
                </x-aura::text>

                <x-aura::text size="sm">
                    Execute <x-aura::inline-code>php artisan migrate</x-aura::inline-code> to generate database schema tables.
                </x-aura::text>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::text size="sm">
    Run <x-aura::inline-code>composer require insoulit/aura-wire</x-aura::inline-code> to install package dependencies.
</x-aura::text>

<x-aura::text size="sm">
    Open your <x-aura::inline-code>config/app.php</x-aura::inline-code> file.
</x-aura::text>

<x-aura::text size="sm">
    Execute <x-aura::inline-code>php artisan migrate</x-aura::inline-code> to generate database schema tables.
</x-aura::text>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Variants (default, outline, dark) -->
    <x-aura::code title="2. Style Variants">

        <x-slot:preview>

            <div class="flex flex-wrap items-center gap-4">

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="neutral" size="sm">default</x-aura::badge>

                    <x-aura::inline-code variant="default">npm run build</x-aura::inline-code>

                </div>

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="subtle" size="sm">outline</x-aura::badge>

                    <x-aura::inline-code variant="outline">git status</x-aura::inline-code>

                </div>

                <div class="flex items-center gap-2">

                    <x-aura::badge variant="neutral" size="sm">dark</x-aura::badge>

                    <x-aura::inline-code variant="dark">ddev start</x-aura::inline-code>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::inline-code variant="default">npm run build</x-aura::inline-code>

<x-aura::inline-code variant="outline">git status</x-aura::inline-code>

<x-aura::inline-code variant="dark">ddev start</x-aura::inline-code>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Scales (xs, sm, md) -->
    <x-aura::code title="3. Size Scales (xs, sm, md)">

        <x-slot:preview>

            <div class="space-y-3 max-w-xl w-full">

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="subtle" size="md">size="md"</x-aura::badge>

                    <x-aura::inline-code size="md">--port=8080</x-aura::inline-code>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="subtle" size="md">size="sm" (Default)</x-aura::badge>

                    <x-aura::inline-code size="sm">--port=8080</x-aura::inline-code>

                </div>

                <div class="flex items-center gap-3">

                    <x-aura::badge variant="subtle" size="md">size="xs"</x-aura::badge>

                    <x-aura::inline-code size="xs">--port=8080</x-aura::inline-code>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::inline-code size="md">--port=8080</x-aura::inline-code>

<x-aura::inline-code size="sm">--port=8080</x-aura::inline-code>

<x-aura::inline-code size="xs">--port=8080</x-aura::inline-code>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

</x-aura::stack>
