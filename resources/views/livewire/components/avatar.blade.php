<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Avatar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Avatar Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::avatar&gt;</code></p>
    </div>
    <x-aura::code title="User Avatars">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::avatar initials="AW" size="xs" status="online" />
                <x-aura::avatar initials="JD" size="sm" status="online" />
                <x-aura::avatar initials="US" size="md" status="busy" />
                <x-aura::avatar initials="AD" size="lg" status="away" />
                <x-aura::avatar initials="SQ" size="xl" square status="offline" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::avatar initials="AW" size="xs" status="online" /&gt;
&lt;x-aura::avatar initials="US" size="md" status="busy" /&gt;
&lt;x-aura::avatar initials="SQ" size="xl" square status="offline" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
