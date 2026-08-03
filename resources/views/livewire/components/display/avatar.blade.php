<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Avatar - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Avatar</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::avatar&gt;</code>
    </div>
    <x-aura::code class="w-full" title="User Avatars">
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
