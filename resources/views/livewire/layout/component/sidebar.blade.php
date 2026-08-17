<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<div class="contents lg:block">

    <!-- Desktop Sidebar -->
    <aside class="w-56 shrink-0 hidden lg:block border-r border-zinc-200 dark:border-zinc-800/80 pr-4 h-full">

        <div class="sticky top-20 overflow-y-auto scrollbar-none max-h-[calc(100vh-6rem)]">

            <livewire:layout.component.sidebar-content />

        </div>

    </aside>

    <!-- Mobile Sidebar Drawer Sheet -->
    <x-aura::sheet name="components-mobile-sidebar" side="left" title="Component Library">

        <livewire:layout.component.sidebar-content />

    </x-aura::sheet>

</div>
