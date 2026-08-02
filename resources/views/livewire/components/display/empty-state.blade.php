<?php

use Livewire\Volt\Component;

new class extends Component {
    public function rendering($view)
    {
        $view->layout('layouts.components')->title('Empty State Component — Aura Wire');
    }
};

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Empty State Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::empty-state&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Default Empty State --}}
    <x-aura::code title="Standard Empty State">
        <x-slot:preview>
            <div class="w-full max-w-xl">
                <x-aura::empty-state title="No Projects Found" description="You haven't created any projects yet. Start by creating a new project to get going.">
                    <x-slot name="icon">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    </x-slot>
                    <x-aura::button variant="primary" size="sm">Create First Project</x-aura::button>
                </x-aura::empty-state>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::empty-state
    title="No Projects Found"
    description="You haven't created any projects yet. Start by creating a new project to get going."
&gt;
    &amp;lt;x-slot name="icon"&amp;gt;
        &amp;lt;svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"&amp;gt;...&amp;lt;/svg&amp;gt;
    &amp;lt;/x-slot&amp;gt;
    &amp;lt;x-aura::button variant="primary" size="sm"&amp;gt;Create First Project&amp;lt;/x-aura::button&amp;gt;
&amp;lt;/x-aura::empty-state&amp;gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
