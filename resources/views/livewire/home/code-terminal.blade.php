<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

@php
    $snippet = '<x-aura::card title="Welcome">
    <x-aura::field label="Email Address">
        <x-aura::input placeholder="alex@example.com" />
    </x-aura::field>
    <x-aura::button variant="primary">
        Create
    </x-aura::button>
</x-aura::card>';
@endphp

<div class="w-full max-w-2xl text-left">

    <x-aura::code
        title="resources/views/welcome.blade.php"
        :code="$snippet"
        active="code"
        variant="dark"
        :showTabs="false"
        :highlighted="true"
    >

        <x-slot:codeSlot><span class="text-amber-200">&lt;x-aura::card</span> <span class="text-zinc-400">title</span>=<span class="text-zinc-300">"Welcome"</span><span class="text-amber-200">&gt;</span>
    <span class="text-amber-200">&lt;x-aura::field</span> <span class="text-zinc-400">label</span>=<span class="text-zinc-300">"Email Address"</span><span class="text-amber-200">&gt;</span>
        <span class="text-amber-200">&lt;x-aura::input</span> <span class="text-zinc-400">placeholder</span>=<span class="text-zinc-300">"alex@example.com"</span> <span class="text-amber-200">/&gt;</span>
    <span class="text-amber-200">&lt;/x-aura::field&gt;</span>
    <span class="text-amber-200">&lt;x-aura::button</span> <span class="text-zinc-400">variant</span>=<span class="text-zinc-300">"primary"</span><span class="text-amber-200">&gt;</span>
        <span class="text-zinc-300">Create</span>
    <span class="text-amber-200">&lt;/x-aura::button&gt;</span>
<span class="text-amber-200">&lt;/x-aura::card&gt;</x-slot:codeSlot>

    </x-aura::code>

</div>
