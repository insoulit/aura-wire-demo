<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Slide Overs — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Slide Overs</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" >
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- 1. Live Interactive Slide-Over Panel -->
    <x-aura::code  title="1. Live Interactive Side Sheet Drawers">
        <x-slot:preview>
            <div class="p-8 w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-50/50 dark:bg-zinc-900/40 text-center flex flex-col items-center justify-center space-y-4">
                <div class="space-y-1 max-w-md">
                    <x-aura::heading level="3" size="sm">Test Interactive Slide Over Drawers</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">Click below to open right or left sliding drawer panels with smooth Alpine animations.</x-aura::text>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                    <x-aura::button variant="primary" size="md" x-data x-on:click="$dispatch('open-sheet', 'right-drawer-demo')">
                        Open Right Slide Over
                    </x-aura::button>
                    <x-aura::button variant="subtle" size="md" x-data x-on:click="$dispatch('open-sheet', 'left-drawer-demo')">
                        Open Left Slide Over
                    </x-aura::button>
                </div>

                <!-- Right Drawer Sheet -->
                <x-aura::sheet name="right-drawer-demo" side="right" title="Filter Records" description="Narrow down dataset results by date and status." maxWidth="md">
                    <div class="space-y-4 py-2">
                        <x-aura::field label="Status Filter">
                            <x-aura::select>
                                <option>All Statuses</option>
                                <option>Active</option>
                                <option>Pending</option>
                                <option>Archived</option>
                            </x-aura::select>
                        </x-aura::field>
                        <x-aura::field label="Search Query">
                            <x-aura::input placeholder="Search names or emails..." icon="search" />
                        </x-aura::field>
                    </div>
                    <x-slot:footer>
                        <x-aura::button variant="subtle" size="sm" x-on:click="open = false">Cancel</x-aura::button>
                        <x-aura::button variant="primary" size="md">Apply Filters</x-aura::button>
                    </x-slot:footer>
                </x-aura::sheet>

                <!-- Left Drawer Sheet -->
                <x-aura::sheet name="left-drawer-demo" side="left" title="Navigation Drawer" description="Quick access menu for mobile navigation." maxWidth="sm">
                    <div class="space-y-3 py-2 text-left">
                        <x-aura::button variant="subtle" size="sm"  href="/guest#design-block">
                            <x-aura::icon name="home"  size="xs" />
                            <span>Guest Home</span>
                        </x-aura::button>
                        <x-aura::button variant="subtle" size="sm"  href="/guest/block/feature">
                            <x-aura::icon name="layout"  size="xs" />
                            <span>Feature Grid</span>
                        </x-aura::button>
                    </div>
                </x-aura::sheet>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;!-- Slide Over Trigger --&gt;
&lt;x-aura::button variant="primary" x-on:click="$dispatch('open-sheet', 'filter-drawer')"&gt;
    Open Slide Over
&lt;/x-aura::button&gt;

&lt;!-- Slide Over Side Sheet Component --&gt;
&lt;x-aura::sheet name="filter-drawer" side="right" title="Filter Records" description="Narrow down dataset results."&gt;
    &lt;div class="space-y-4"&gt;
        &lt;x-aura::field label="Status Filter"&gt;
            &lt;x-aura::select&gt;
                &lt;option&gt;All Statuses&lt;/option&gt;
                &lt;option&gt;Active&lt;/option&gt;
            &lt;/x-aura::select&gt;
        &lt;/x-aura::field&gt;
    &lt;/div&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="subtle" size="sm" x-on:click="open = false"&gt;Cancel&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="primary" size="md"&gt;Apply Filters&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::sheet&gt;</x-slot>
    </x-aura::code>
</div>
