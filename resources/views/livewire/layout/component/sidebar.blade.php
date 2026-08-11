<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<div>
    <!-- Desktop Sidebar -->
    <aside class="w-60 shrink-0 hidden lg:block border-r border-zinc-200 dark:border-zinc-800/80 pr-6 space-y-4 text-sm sticky top-20 min-h-full overflow-y-auto scrollbar-thin">
        <livewire:layout.component.sidebar-content />
    </aside>

    <!-- Mobile Sidebar Drawer Sheet -->
    <x-aura::sheet name="components-mobile-sidebar" side="left" title="Component Library">
        <div class="space-y-4 text-sm pt-2">
            <livewire:layout.component.sidebar-content />
        </div>
    </x-aura::sheet>
</div>
