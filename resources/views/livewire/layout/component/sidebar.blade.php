<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<div class="contents lg:block">

    <!-- Desktop Sidebar -->
    <aside class="w-60 shrink-0 hidden lg:block border-r border-zinc-200 dark:border-zinc-800/80 pr-6 h-full">

        <div class="sticky top-20 space-y-4 text-sm overflow-y-auto scrollbar-none max-h-[calc(100vh-6rem)]">

            <livewire:layout.component.sidebar-content />

        </div>

    </aside>

    <!-- Mobile Sidebar Drawer Sheet -->
    <x-aura::sheet name="components-mobile-sidebar" side="left" title="Component Library">

        <x-aura::stack gap="md">

            <livewire:layout.component.sidebar-content />

        </x-aura::stack>

    </x-aura::sheet>

</div>
