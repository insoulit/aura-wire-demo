<?php

use Livewire\Volt\Component;

new class extends Component {
    public function rendering($view)
    {
        $view->layout('layouts.components')->title('Command - Aura Wire');
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Overlay Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Command</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Keyboard-driven command palette modal dialog listening on <code class="text-xs bg-zinc-100 dark:bg-zinc-800 px-2 py-0.5 rounded">Cmd+K</code> / <code class="text-xs bg-zinc-100 dark:bg-zinc-800 px-2 py-0.5 rounded">Ctrl+K</code> with instant search filtering.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::command&gt;
            </code>
        </div>
    </div>

    <!-- 1. Command Palette Modal Trigger -->
    <x-aura::code class="w-full" title="1. Keyboard Trigger & Global Modal Palette">
        <x-slot:preview>
            <div class="flex flex-col items-center gap-4 py-6">
                <button
                    x-data
                    @click="$dispatch('open-command')"
                    class="inline-flex items-center gap-3 px-4 py-2.5 rounded-xl text-xs font-semibold bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 border border-zinc-200 dark:border-zinc-700 hover:bg-zinc-200 dark:hover:bg-zinc-700 transition-colors cursor-pointer"
                >
                    <x-aura::icon name="search" size="xs" class="text-zinc-400" />
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
        <x-slot:codeSlot>&lt;button @click="$dispatch('open-command')"&gt;Search components... (⌘K)&lt;/button&gt;

&lt;x-aura::command placeholder="Type a command or search..."&gt;
    &lt;x-aura::command.group title="Navigation"&gt;
        &lt;x-aura::command.item href="/components/button" icon="square-mouse-pointer" shortcut="⌘B"&gt;
            Button Component
        &lt;/x-aura::command.item&gt;
        &lt;x-aura::command.item href="/components/date-picker" icon="calendar" shortcut="⌘D"&gt;
            Date Picker Component
        &lt;/x-aura::command.item&gt;
    &lt;/x-aura::command.group&gt;

    &lt;x-aura::command.group title="Quick Actions"&gt;
        &lt;x-aura::command.item icon="moon" shortcut="⌘T"&gt;
            Toggle Dark Mode
        &lt;/x-aura::command.item&gt;
    &lt;/x-aura::command.group&gt;
&lt;/x-aura::command&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
