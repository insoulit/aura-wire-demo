<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Empty State - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Empty State</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Placeholder layouts for empty datasets, search resets, document creation, and zero-state screens using buttons and icons.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::empty-state&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Empty State with Primary Action -->
    <x-aura::code class="w-full" title="1. Standard No Data State">
        <x-slot:preview>
            <div class="w-full max-w-xl">
                <x-aura::empty-state 
                    icon="folder-open"
                    title="No Projects Found" 
                    description="You haven't created any workspace projects yet. Get started by creating your first project."
                >
                    <div class="flex items-center gap-2.5">
                        <x-aura::button variant="primary" size="sm" icon="plus">
                            Create Project
                        </x-aura::button>
                        <x-aura::button variant="secondary" size="sm" icon="sparkles">
                            Browse Templates
                        </x-aura::button>
                    </div>
                </x-aura::empty-state>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::empty-state 
    icon="folder-open"
    title="No Projects Found" 
    description="You haven't created any workspace projects yet. Get started by creating your first project."
&gt;
    &lt;x-aura::button variant="primary" size="sm" icon="plus"&gt;
        Create Project
    &lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary" size="sm" icon="sparkles"&gt;
        Browse Templates
    &lt;/x-aura::button&gt;
&lt;/x-aura::empty-state&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Search No Results State -->
    <x-aura::code class="w-full" title="2. Search No Matching Results State">
        <x-slot:preview>
            <div class="w-full max-w-xl">
                <x-aura::empty-state 
                    icon="search-x"
                    title="No Matching Search Results" 
                    description="We couldn't find any documents matching your query. Try resetting filters or searching with a different term."
                >
                    <x-aura::button variant="secondary" size="sm" icon="refresh-cw">Reset All Filters</x-aura::button>
                    <x-aura::icon-button icon="pencil" variant="secondary" size="sm" label="New Note" />
                </x-aura::empty-state>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::empty-state 
    icon="search-x"
    title="No Matching Results" 
    description="We couldn't find any documents matching your query."
&gt;
    &lt;x-aura::button variant="secondary" size="sm" icon="refresh-cw"&gt;Reset All Filters&lt;/x-aura::button&gt;
    &lt;x-aura::icon-button icon="pencil" variant="secondary" size="sm" label="New Note" /&gt;
&lt;/x-aura::empty-state&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Inbox Empty State -->
    <x-aura::code class="w-full" title="3. Empty Inbox / Messages State">
        <x-slot:preview>
            <div class="w-full max-w-xl">
                <x-aura::empty-state 
                    icon="inbox"
                    title="Your Inbox is Empty" 
                    description="All caught up! You have no unread notifications or messages in your queue."
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::empty-state 
    icon="inbox"
    title="Your Inbox is Empty" 
    description="All caught up! You have no unread notifications or messages in your queue."
/&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
