<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Avatar - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Avatar</x-aura::heading>
            <x-aura::subheading size="md">
                User profile images and fallback initial badges with online status indicators.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::avatar initials="JD" size="md" status="online" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="User Avatars">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::avatar initials="AW" size="xs" status="online" />
                <x-aura::avatar initials="JD" size="sm" status="online" />
                <x-aura::avatar initials="US" size="md" status="busy" />
                <x-aura::avatar initials="AD" size="lg" status="away" />
                <x-aura::avatar initials="SQ" size="xl" square status="offline" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::avatar initials="AW" size="xs" status="online" />
<x-aura::avatar initials="US" size="md" status="busy" />
<x-aura::avatar initials="SQ" size="xl" square status="offline" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>
