<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Body - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Body</x-aura::heading>
            <x-aura::subheading size="md">
                Root page body layout component managing theme background colors, font smoothing, and viewport height scaling.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::body>Page content</x-aura::body>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <x-aura::code  title="Root Page Body Layout Component">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 text-center">
                <div class="text-xs font-mono text-zinc-500 dark:text-zinc-400">
                    &lt;x-aura::body&gt; ... &lt;/x-aura::body&gt;
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!DOCTYPE html>
<html lang="en" class="h-full antialiased">
<x-layout::shared.head title="App" />
<x-aura::body>
    <livewire:layout.shared.header />
    <main>
        {{ $slot }}
    </main>
    <livewire:layout.shared.footer />
</x-aura::body>
</html>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
