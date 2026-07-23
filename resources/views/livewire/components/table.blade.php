<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Table Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Table Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::table&gt;</code></p>
    </div>
    <x-aura::code title="Data Table">
        <x-slot:preview>
            <x-aura::table>
                <x-slot:header>
                    <tr>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Role</th>
                        <th class="px-4 py-2 text-left">Status</th>
                    </tr>
                </x-slot:header>
                <tr>
                    <td class="px-4 py-2">Alex Morgan</td>
                    <td class="px-4 py-2">Developer</td>
                    <td class="px-4 py-2"><x-aura::badge variant="positive">Active</x-aura::badge></td>
                </tr>
            </x-aura::table>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::table&gt;
    &lt;x-slot:header&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Status&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/x-slot:header&gt;
    &lt;tr&gt;
        &lt;td&gt;Alex&lt;/td&gt;
        &lt;td&gt;&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
