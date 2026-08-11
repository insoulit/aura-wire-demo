<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<div class="w-full max-w-2xl text-left rounded-2xl bg-zinc-900 text-zinc-100 border border-zinc-800 shadow-2xl overflow-hidden font-mono">
    <!-- Window Header Bar -->
    <div class="flex items-center justify-between px-3.5 sm:px-4 py-2.5 sm:py-3 bg-zinc-950/80 border-b border-zinc-800/80 gap-2">
        <div class="flex items-center gap-1.5 sm:gap-2 min-w-0">
            <div class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-red-500/80 shrink-0"></div>
            <div class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-amber-500/80 shrink-0"></div>
            <div class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-emerald-500/80 shrink-0"></div>
            <span class="ml-1 sm:ml-2 font-sans text-[11px] sm:text-xs text-zinc-400 truncate">resources/views/welcome.blade.php</span>
        </div>
        <div
            x-data="{ copied: false, snippet: @js('<x-aura::card title=\'Welcome\'>\n    <x-aura::field label=\'Email Address\'>\n        <x-aura::input placeholder=\'alex@example.com\' />\n    </x-aura::field>\n    <x-aura::button variant=\'primary\'>Create</x-aura::button>\n</x-aura::card>') }"
            x-on:click="navigator.clipboard.writeText(snippet); copied = true; setTimeout(() => copied = false, 2000)"
            class="flex items-center gap-1.5 px-2 sm:px-2.5 py-1 rounded-md bg-zinc-800/60 hover:bg-zinc-800 text-zinc-300 hover:text-white transition-colors cursor-pointer text-xs font-sans shrink-0"
        >
            <template x-if="!copied">
                <div class="flex items-center gap-1">
                    <x-aura::icon name="copy" class="shrink-0" />
                    <span class="hidden sm:inline">Copy Code</span>
                    <span class="sm:hidden">Copy</span>
                </div>
            </template>
            <template x-if="copied">
                <div class="flex items-center gap-1 text-emerald-400">
                    <x-aura::icon name="check" class="shrink-0" />
                    <span>Copied!</span>
                </div>
            </template>
        </div>
    </div>

    <!-- Code Preview Content: pre block with relaxed line height (1.7) -->
    <pre class="p-4 sm:p-5 overflow-x-auto text-xs sm:text-sm font-mono whitespace-pre text-left scrollbar-none leading-relaxed sm:leading-[1.7]"><span class="text-zinc-500">&lt;!-- Easy Blade Component Usage --&gt;</span>
<span class="text-indigo-400">&lt;x-aura::card</span> <span class="text-emerald-300">title</span>=<span class="text-amber-300">"Welcome"</span><span class="text-indigo-400">&gt;</span>
    <span class="text-indigo-400">&lt;x-aura::field</span> <span class="text-emerald-300">label</span>=<span class="text-amber-300">"Email Address"</span><span class="text-indigo-400">&gt;</span>
        <span class="text-indigo-400">&lt;x-aura::input</span> <span class="text-emerald-300">placeholder</span>=<span class="text-amber-300">"alex@example.com"</span> <span class="text-indigo-400">/&gt;</span>
    <span class="text-indigo-400">&lt;/x-aura::field&gt;</span>
    <span class="text-indigo-400">&lt;x-aura::button</span> <span class="text-emerald-300">variant</span>=<span class="text-amber-300">"primary"</span><span class="text-indigo-400">&gt;</span>Create<span class="text-indigo-400">&lt;/x-aura::button&gt;</span>
<span class="text-indigo-400">&lt;/x-aura::card&gt;</span></pre>
</div>
