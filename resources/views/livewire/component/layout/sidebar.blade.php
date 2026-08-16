<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Sidebar - Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::stack gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Sidebar</x-aura::heading>
            <x-aura::subheading size="md">
                Collapsible vertical navigation sidebars with section groups, active state highlights, and icon items.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::sidebar>
    <x-aura::sidebar.heading>Navigation</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="#" icon="layout-dashboard" active>Dashboard</x-aura::sidebar.item>
</x-aura::sidebar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Standard Sidebar --}}
    <x-aura::code  title="Sidebar Navigation Container">
        <x-slot:preview>
            <div class="w-64 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden bg-white dark:bg-zinc-900 p-2">
                <x-aura::sidebar.heading>Navigation</x-aura::sidebar.heading>
                <x-aura::sidebar.item href="#" active>Dashboard</x-aura::sidebar.item>
                <x-aura::sidebar.item href="#" badge="12">Notifications</x-aura::sidebar.item>
                <x-aura::sidebar.item href="#">Settings</x-aura::sidebar.item>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::sidebar>
    <x-aura::sidebar.heading>Navigation</x-aura::sidebar.heading>
    <x-aura::sidebar.item href="#" active>Dashboard</x-aura::sidebar.item>
    <x-aura::sidebar.item href="#" badge="12">Notifications</x-aura::sidebar.item>
</x-aura::sidebar>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Sidebar Collapsible Dropdown Menu --}}
    <x-aura::code  title="Collapsible Sidebar Dropdown Option">
        <x-slot:preview>
            <div class="w-64 border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden bg-white dark:bg-zinc-900 p-2">
                <x-aura::sidebar.heading>Nested Navigation</x-aura::sidebar.heading>
                <x-aura::sidebar.dropdown label="Management" badge="Admin" :active="true">
                    <x-aura::sidebar.item href="#" active>User Accounts</x-aura::sidebar.item>
                    <x-aura::sidebar.item href="#">Roles &amp; Permissions</x-aura::sidebar.item>
                    <x-aura::sidebar.item href="#">Access Control</x-aura::sidebar.item>
                </x-aura::sidebar.dropdown>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::sidebar.dropdown label="Management" badge="Admin" :active="true">
    <x-aura::sidebar.item href="#" active>User Accounts</x-aura::sidebar.item>
    <x-aura::sidebar.item href="#">Roles & Permissions</x-aura::sidebar.item>
    <x-aura::sidebar.item href="#">Access Control</x-aura::sidebar.item>
</x-aura::sidebar.dropdown>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>
