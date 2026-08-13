<?php

use Livewire\Volt\Component;

new class extends Component {
    public function rendering($view)
    {
        $view->layout('livewire.layout.component')->title('Command - Aura Wire');
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Overlay</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Command</x-aura::heading>
            <x-aura::subheading size="md">
                Keyboard-driven command palette modal dialog listening on Cmd+K / Ctrl+K with instant search filtering.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::command shortcut="meta.k" placeholder="Type a command..." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Command Palette Modal Trigger -->
    <x-aura::code  title="1. Keyboard Trigger & Global Modal Palette">
        <x-slot:preview>
            <div class="flex flex-col items-center gap-4 py-6">
                <button
                    x-data
                    @click="$dispatch('open-command')"
                    class="inline-flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-semibold bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 border border-zinc-200 dark:border-zinc-700 hover:bg-zinc-200 dark:hover:bg-zinc-700 transition-colors cursor-pointer"
                >
                    <div class="text-zinc-400">
                        <x-aura::icon name="search" size="xs" />
                    </div>
                    <span>Search components or type a command...</span>
                    <kbd class="px-2 py-0.5 text-[10px] font-mono font-bold bg-white dark:bg-zinc-900 text-zinc-900 dark:text-white rounded border border-zinc-200 dark:border-zinc-700">⌘K</kbd>
                </button>

                <x-aura::command placeholder="Type a command or search documentation...">
                    <x-aura::command.group title="Navigation & UI Components">
                        <x-aura::command.item href="/components/button" icon="square-mouse-pointer" shortcut="⌘B">
                            Button Component
                        </x-aura::command.item>
                        <x-aura::command.item href="/components/modal" icon="panel-top" shortcut="⌘M">
                            Modal Dialog Component
                        </x-aura::command.item>
                        <x-aura::command.item href="/components/combobox" icon="search" shortcut="⌘C">
                            Combobox Searchable Select Component
                        </x-aura::command.item>
                        <x-aura::command.item href="/components/date-picker" icon="calendar" shortcut="⌘D">
                            Date Picker Calendar Component
                        </x-aura::command.item>
                    </x-aura::command.group>

                    <x-aura::command.group title="Quick Actions">
                        <x-aura::command.item icon="moon" shortcut="⌘T">
                            Toggle Dark / Light Theme
                        </x-aura::command.item>
                        <x-aura::command.item icon="file-text" shortcut="⌘P">
                            Export Documentation PDF
                        </x-aura::command.item>
                    </x-aura::command.group>
                </x-aura::command>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<button @click="$dispatch('open-command')">Search components... (⌘K)</button>

<x-aura::command placeholder="Type a command or search...">
    <x-aura::command.group title="Navigation">
        <x-aura::command.item href="/components/button" icon="square-mouse-pointer" shortcut="⌘B">
            Button Component
        </x-aura::command.item>
        <x-aura::command.item href="/components/date-picker" icon="calendar" shortcut="⌘D">
            Date Picker Component
        </x-aura::command.item>
    </x-aura::command.group>

    <x-aura::command.group title="Quick Actions">
        <x-aura::command.item icon="moon" shortcut="⌘T">
            Toggle Dark Mode
        </x-aura::command.item>
    </x-aura::command.group>
</x-aura::command>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
