<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Installation & Setup Guide — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Getting Started
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Documentation
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Installation &amp; Setup Guide
        </x-aura::heading>

        <x-aura::subheading size="md">
            Install insoulit/aura-wire via Composer into your Laravel application and configure Plus Jakarta Sans typography.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Installation Command Syntax -->
    <x-aura::code variant="dark" title="Composer Installation" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                composer require insoulit/aura-wire
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- Requirements Card -->
    <x-aura::card title="System Requirements" description="Prerequisites for integrating Aura Wire components into your project.">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-2">

            {{-- PHP --}}
            <div class="p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3" class="min-w-0">

                        <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">PHP</div>

                        <div class="min-w-0">

                            <x-aura::text weight="bold" size="sm" class="truncate">
                                PHP Runtime
                            </x-aura::text>

                            <x-aura::text variant="subtle" size="sm" class="truncate">
                                Version 8.2 or higher
                            </x-aura::text>

                        </div>

                    </x-aura::flex>

                    <x-aura::badge variant="neutral" size="sm">
                        v8.2+
                    </x-aura::badge>

                </x-aura::flex>

            </div>

            {{-- Laravel --}}
            <div class="p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3" class="min-w-0">

                        <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">LV</div>

                        <div class="min-w-0">

                            <x-aura::text weight="bold" size="sm" class="truncate">
                                Laravel Framework
                            </x-aura::text>

                            <x-aura::text variant="subtle" size="sm" class="truncate">
                                Version 11.x or 12.x
                            </x-aura::text>

                        </div>

                    </x-aura::flex>

                    <x-aura::badge variant="positive" size="sm">
                        v11 / v12
                    </x-aura::badge>

                </x-aura::flex>

            </div>

            {{-- Livewire --}}
            <div class="p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3" class="min-w-0">

                        <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">LW</div>

                        <div class="min-w-0">

                            <x-aura::text weight="bold" size="sm" class="truncate">
                                Livewire Core
                            </x-aura::text>

                            <x-aura::text variant="subtle" size="sm" class="truncate">
                                Version 3.0 or higher
                            </x-aura::text>

                        </div>

                    </x-aura::flex>

                    <x-aura::badge variant="primary" size="sm">
                        v3.0+
                    </x-aura::badge>

                </x-aura::flex>

            </div>

            {{-- Tailwind CSS --}}
            <div class="p-3.5 rounded-xl bg-zinc-50/80 dark:bg-zinc-900/60 border border-zinc-200/80 dark:border-zinc-800">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3" class="min-w-0">

                        <div class="w-8 h-8 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-mono font-bold text-xs shrink-0 shadow-2xs">TW</div>

                        <div class="min-w-0">

                            <x-aura::text weight="bold" size="sm" class="truncate">
                                Tailwind CSS
                            </x-aura::text>

                            <x-aura::text variant="subtle" size="sm" class="truncate">
                                Version 3.x or 4.x
                            </x-aura::text>

                        </div>

                    </x-aura::flex>

                    <x-aura::badge variant="subtle" size="sm">
                        v3 / v4
                    </x-aura::badge>

                </x-aura::flex>

            </div>

        </div>

    </x-aura::card>

    <!-- Installation Steps -->
    <x-aura::flex direction="col" gap="6" class="w-full">

        <!-- Step 1 -->
        <x-aura::card>

            <x-aura::flex direction="col" gap="4">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3">

                        <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">1</span>

                        <x-aura::heading level="2" size="md">
                            Require Package via Composer
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::badge variant="subtle" size="sm">
                        Terminal
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::text size="sm" variant="subtle">
                    Run the composer require command in your Laravel root directory:
                </x-aura::text>

                <x-aura::code language="bash" active="code" :showTabs="false">

                    <x-slot:codeSlot>

                        @verbatim
                            composer require insoulit/aura-wire
                        @endverbatim

                    </x-slot:codeSlot>

                </x-aura::code>

            </x-aura::flex>

        </x-aura::card>

        <!-- Step 2 -->
        <x-aura::card>

            <x-aura::flex direction="col" gap="4">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3">

                        <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">2</span>

                        <x-aura::heading level="2" size="md">
                            Publish Package Assets &amp; Config
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::badge variant="subtle" size="sm">
                        Artisan
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::text size="sm" variant="subtle">
                    Publish the configuration and Blade components using Artisan:
                </x-aura::text>

                <x-aura::code language="bash" active="code" :showTabs="false">

                    <x-slot:codeSlot>

                        @verbatim
                            php artisan vendor:publish --tag="aura-wire-config"
                        @endverbatim

                    </x-slot:codeSlot>

                </x-aura::code>

            </x-aura::flex>

        </x-aura::card>

        <!-- Step 3 -->
        <x-aura::card>

            <x-aura::flex direction="col" gap="4">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3">

                        <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">3</span>

                        <x-aura::heading level="2" size="md">
                            Register Component Views in Tailwind
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::badge variant="subtle" size="sm">
                        Tailwind CSS
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::text size="sm" variant="subtle">
                    Ensure your Tailwind CSS configuration includes vendor component views:
                </x-aura::text>

                <x-aura::code language="javascript" active="code" :showTabs="false">

                    <x-slot:codeSlot>

                        @verbatim
                            content: [
                                './resources/**/*.blade.php',
                                './vendor/insoulit/aura-wire/resources/views/**/*.blade.php',
                            ],
                        @endverbatim

                    </x-slot:codeSlot>

                </x-aura::code>

            </x-aura::flex>

        </x-aura::card>

        <!-- Step 4 -->
        <x-aura::card>

            <x-aura::flex direction="col" gap="4">

                <x-aura::flex align="center" justify="between" gap="3">

                    <x-aura::flex align="center" gap="3">

                        <span class="flex items-center justify-center w-7 h-7 rounded-lg bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs shrink-0 shadow-2xs">4</span>

                        <x-aura::heading level="2" size="md">
                            Use Components with Tag Syntax
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::badge variant="subtle" size="sm">
                        Usage
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::text size="sm" variant="subtle">
                    Render components using standard Blade prefix syntax:
                </x-aura::text>

                <x-aura::code language="html" active="code" :showTabs="false">

                    <x-slot:codeSlot>

                        @verbatim
                            <x-aura::button variant="primary">
                                Create
                            </x-aura::button>
                        @endverbatim

                    </x-slot:codeSlot>

                </x-aura::code>

            </x-aura::flex>

        </x-aura::card>

    </x-aura::flex>

</x-aura::container>
