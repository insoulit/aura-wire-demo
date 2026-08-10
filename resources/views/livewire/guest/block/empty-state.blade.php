<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('Empty State — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Empty State</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" class="shrink-0 gap-1.5">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 shrink-0" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Empty State Block Preview -->
    <x-aura::code class="w-full" title="First-Time Onboarding Empty State Block">
        <x-slot:preview>
            <x-aura::card class="w-full p-6 sm:p-12 text-center flex flex-col items-center justify-center space-y-4 border border-zinc-200 dark:border-zinc-800">
                <div class="w-14 h-14 rounded-2xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-600 dark:text-zinc-300 shadow-2xs">
                    <x-aura::icon name="folder-open" class="w-7 h-7" />
                </div>
                <div class="space-y-1.5 max-w-md">
                    <x-aura::heading level="2" size="md">No Projects Created Yet</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">
                        Get started by creating your very first project or importing an existing repository.
                    </x-aura::text>
                </div>
                <div class="pt-2">
                    <x-aura::button variant="primary" size="md" icon="plus">
                        <span>Create</span>
                    </x-aura::button>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="w-full p-6 sm:p-12 text-center flex flex-col items-center justify-center space-y-4"&gt;
    &lt;div class="w-14 h-14 rounded-2xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center text-zinc-600"&gt;
        &lt;x-aura::icon name="folder-open" class="w-7 h-7" /&gt;
    &lt;/div&gt;
    &lt;div class="space-y-1.5 max-w-md"&gt;
        &lt;x-aura::heading level="2" size="md"&gt;No Projects Created Yet&lt;/x-aura::heading&gt;
        &lt;x-aura::text variant="subtle" size="sm"&gt;Get started by creating your very first project.&lt;/x-aura::text&gt;
    &lt;/div&gt;
    &lt;x-aura::button variant="primary" size="md" icon="plus"&gt;
        &lt;span&gt;Create&lt;/span&gt;
    &lt;/x-aura::button&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>
