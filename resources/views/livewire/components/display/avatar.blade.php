<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Avatar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Avatar Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::avatar&gt;</x-aura::code></x-aura::text>
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
