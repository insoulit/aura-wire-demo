<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

@php
    $snippet = '<x-aura::card title="Welcome">
    <x-aura::field label="Email Address">
        <x-aura::input placeholder="alex@example.com" />
    </x-aura::field>
    <x-aura::button variant="primary">Create</x-aura::button>
</x-aura::card>';
@endphp

<div class="w-full max-w-2xl text-left">
    <x-aura::code
        title="resources/views/welcome.blade.php"
        :code="$snippet"
        active="code"
        variant="dark"
        :showTabs="false"
    >
        <x-slot:codeSlot>
<span class="text-zinc-500">&lt;!-- Easy Blade Component Usage --&gt;</span>
<span class="text-indigo-400">&lt;x-aura::card</span> <span class="text-emerald-300">title</span>=<span class="text-amber-300">"Welcome"</span><span class="text-indigo-400">&gt;</span>
    <span class="text-indigo-400">&lt;x-aura::field</span> <span class="text-emerald-300">label</span>=<span class="text-amber-300">"Email Address"</span><span class="text-indigo-400">&gt;</span>
        <span class="text-indigo-400">&lt;x-aura::input</span> <span class="text-emerald-300">placeholder</span>=<span class="text-amber-300">"alex@example.com"</span> <span class="text-indigo-400">/&gt;</span>
    <span class="text-indigo-400">&lt;/x-aura::field&gt;</span>
    <span class="text-indigo-400">&lt;x-aura::button</span> <span class="text-emerald-300">variant</span>=<span class="text-amber-300">"primary"</span><span class="text-indigo-400">&gt;</span>Create<span class="text-indigo-400">&lt;/x-aura::button&gt;</span>
<span class="text-indigo-400">&lt;/x-aura::card&gt;</span>
        </x-slot:codeSlot>
    </x-aura::code>
</div>
