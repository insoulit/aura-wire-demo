<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Timeline — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Timeline</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" >
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Timeline Block Preview -->
    <x-aura::code  title="Deployment &amp; Activity Log Stream Block">
        <x-slot:preview>
            <x-aura::card >
                <div class="flex items-center justify-between">
                    <x-aura::kicker>System Activity Stream</x-aura::kicker>
                    <x-aura::tag variant="subtle" size="sm">Live Feed</x-aura::tag>
                </div>
                
                <div class="space-y-6 relative ml-3 pl-6 border-l border-zinc-200 dark:border-zinc-800">
                    <!-- Entry 1 (Latest / Active) -->
                    <div class="relative space-y-1">
                        <span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-900 dark:bg-white ring-4 ring-white dark:ring-zinc-900"></span>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                            <x-aura::heading level="3" size="sm" >v2.4.0 Deployed to Production</x-aura::heading>
                            <x-aura::text variant="subtle" size="xs" >12 min ago</x-aura::text>
                        </div>
                        <x-aura::text variant="subtle" size="xs">
                            Triggered by Alex Morgan via GitHub Webhook deployment pipeline.
                        </x-aura::text>
                    </div>

                    <!-- Entry 2 -->
                    <div class="relative space-y-1">
                        <span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-400 dark:bg-zinc-600 ring-4 ring-white dark:ring-zinc-900"></span>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                            <x-aura::heading level="3" size="sm" >SSL Certificate Auto-Renewed</x-aura::heading>
                            <x-aura::text variant="subtle" size="xs" >2 hours ago</x-aura::text>
                        </div>
                        <x-aura::text variant="subtle" size="xs">
                            Let's Encrypt automated verification completed for domain *.aurawire.dev.
                        </x-aura::text>
                    </div>

                    <!-- Entry 3 -->
                    <div class="relative space-y-1">
                        <span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-400 dark:bg-zinc-600 ring-4 ring-white dark:ring-zinc-900"></span>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1">
                            <x-aura::heading level="3" size="sm" >Database Snapshot Backup</x-aura::heading>
                            <x-aura::text variant="subtle" size="xs" >Yesterday at 04:00 AM</x-aura::text>
                        </div>
                        <x-aura::text variant="subtle" size="xs">
                            Automated backup snapshot archived to primary S3 storage bucket (4.2 GB).
                        </x-aura::text>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-6 w-full space-y-5"&gt;
    &lt;div class="flex items-center justify-between"&gt;
        &lt;x-aura::kicker&gt;System Activity Stream&lt;/x-aura::kicker&gt;
        &lt;x-aura::tag variant="subtle" size="sm"&gt;Live Feed&lt;/x-aura::tag&gt;
    &lt;/div&gt;
    &lt;div class="space-y-6 relative ml-3 pl-6 border-l border-zinc-200 dark:border-zinc-800"&gt;
        &lt;!-- Timeline Entry --&gt;
        &lt;div class="relative space-y-1"&gt;
            &lt;span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-900 dark:bg-white ring-4 ring-white dark:ring-zinc-900"&gt;&lt;/span&gt;
            &lt;div class="flex justify-between text-xs"&gt;
                &lt;x-aura::heading level="3" size="sm"&gt;v2.4.0 Deployed to Production&lt;/x-aura::heading&gt;
                &lt;x-aura::text variant="subtle" size="xs" class="font-mono"&gt;12 min ago&lt;/x-aura::text&gt;
            &lt;/div&gt;
            &lt;x-aura::text variant="subtle" size="xs"&gt;Triggered by Alex Morgan via GitHub Webhook.&lt;/x-aura::text&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>
