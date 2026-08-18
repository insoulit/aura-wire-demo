<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Empty State - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Empty State</x-aura::heading>
            <x-aura::subheading size="md">
                Placeholder layouts for empty datasets, search resets, document creation, and zero-state screens using buttons and icons.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::empty-state icon="folder-open" title="No Projects Found" description="Get started by creating a new project." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard Empty State with Primary Action -->
    <x-aura::code  title="1. Standard No Data State">
        <x-slot:preview>
            <div class="w-full max-w-xl">
                <x-aura::empty-state 
                    icon="folder-open"
                    title="No Projects Found" 
                    description="You haven't created any workspace projects yet. Get started by creating your first project."
                >
                    <div class="flex items-center gap-2.5">
                        <x-aura::button variant="primary" size="sm" icon="plus">
                            Create
                        </x-aura::button>
                        <x-aura::button variant="secondary" size="sm" icon="sparkles">
                            Browse Templates
                        </x-aura::button>
                    </div>
                </x-aura::empty-state>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::empty-state 
    icon="folder-open"
    title="No Projects Found" 
    description="You haven't created any workspace projects yet. Get started by creating your first project."
>
    <x-aura::button variant="primary" size="sm" icon="plus">
        Create
    </x-aura::button>
    <x-aura::button variant="secondary" size="sm" icon="sparkles">
        Browse Templates
    </x-aura::button>
</x-aura::empty-state>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Search No Results State -->
    <x-aura::code  title="2. Search No Matching Results State">
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
        <x-slot:codeSlot>@verbatim<x-aura::empty-state 
    icon="search-x"
    title="No Matching Results" 
    description="We couldn't find any documents matching your query."
>
    <x-aura::button variant="secondary" size="sm" icon="refresh-cw">Reset All Filters</x-aura::button>
    <x-aura::icon-button icon="pencil" variant="secondary" size="sm" label="New Note" />
</x-aura::empty-state>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Inbox Empty State -->
    <x-aura::code  title="3. Empty Inbox / Messages State">
        <x-slot:preview>
            <div class="w-full max-w-xl">
                <x-aura::empty-state 
                    icon="inbox"
                    title="Your Inbox is Empty" 
                    description="All caught up! You have no unread notifications or messages in your queue."
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::empty-state 
    icon="inbox"
    title="Your Inbox is Empty" 
    description="All caught up! You have no unread notifications or messages in your queue."
/>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>
