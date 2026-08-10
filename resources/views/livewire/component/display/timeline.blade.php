<?php

use Livewire\Volt\Component;

new class extends Component {
    public function rendering($view)
    {
        $view->layout('layout.component')->title('Timeline - Aura Wire');
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Timeline</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Chronological event history and activity timeline tracker with monochrome status badges, custom icons, and slot content.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::timeline&gt;
            </code>
        </div>
    </div>

    <!-- 1. Deployment & Release History Timeline -->
    <x-aura::code class="w-full" title="1. Deployment & Release History">
        <x-slot:preview>
            <x-aura::timeline class="w-full">
                <x-aura::timeline.item title="v1.4.0 Released to Production" time="Just now" variant="solid" description="Deployed 11 new UI components to the insoulit/aura-wire suite." />
                <x-aura::timeline.item title="Pull Request #42 Merged" time="15 mins ago" variant="subtle" description="Approved and merged into main branch by @lead-dev." />
                <x-aura::timeline.item title="Automated Test Suite Passed" time="30 mins ago" variant="solid" description="71 Pest tests passed with 220 assertions and 0 errors." />
                <x-aura::timeline.item title="Build Compiled Successfully" time="45 mins ago" variant="subtle" description="Vite production bundle compiled in 1.28s." />
            </x-aura::timeline>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::timeline&gt;
    &lt;x-aura::timeline.item title="v1.4.0 Released to Production" time="Just now" variant="solid" description="Deployed 11 new UI components." /&gt;
    &lt;x-aura::timeline.item title="Pull Request #42 Merged" time="15 mins ago" variant="subtle" description="Approved by @lead-dev." /&gt;
    &lt;x-aura::timeline.item title="Automated Test Suite Passed" time="30 mins ago" variant="solid" description="71 Pest tests passed." /&gt;
    &lt;x-aura::timeline.item title="Build Compiled" time="45 mins ago" variant="subtle" /&gt;
&lt;/x-aura::timeline&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Package Shipping & Delivery Tracker -->
    <x-aura::code class="w-full" title="2. Package Shipping & Delivery Tracker">
        <x-slot:preview>
            <x-aura::timeline class="w-full">
                <x-aura::timeline.item title="Package Delivered" time="02:15 PM" variant="solid" description="Signed for by receiver at front desk. Tracking ID: #TRK-89210." />
                <x-aura::timeline.item title="Out for Delivery" time="08:30 AM" variant="subtle" description="Courier vehicle loaded and en route to destination." />
                <x-aura::timeline.item title="Arrived at Regional Distribution Hub" time="Yesterday, 11:45 PM" variant="subtle" description="Processed at Chicago central transit facility." />
                <x-aura::timeline.item title="Shipment Information Received" time="2 days ago" variant="subtle" description="Label created by seller and carrier notified." />
            </x-aura::timeline>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::timeline&gt;
    &lt;x-aura::timeline.item title="Package Delivered" time="02:15 PM" variant="solid" description="Signed for by receiver. Tracking #TRK-89210." /&gt;
    &lt;x-aura::timeline.item title="Out for Delivery" time="08:30 AM" variant="subtle" /&gt;
    &lt;x-aura::timeline.item title="Arrived at Regional Hub" time="Yesterday" variant="subtle" /&gt;
    &lt;x-aura::timeline.item title="Shipment Info Received" time="2 days ago" variant="subtle" /&gt;
&lt;/x-aura::timeline&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Security & Account Audit Log -->
    <x-aura::code class="w-full" title="3. Security Audit & Access History">
        <x-slot:preview>
            <x-aura::timeline class="w-full">
                <x-aura::timeline.item title="Two-Factor Authentication Enabled" time="1 hour ago" variant="solid" description="Authenticator app 2FA configured for user account." />
                <x-aura::timeline.item title="New Production API Token Generated" time="3 hours ago" variant="subtle" description="Token created with read/write scopes for webhooks." />
                <x-aura::timeline.item title="Password Changed Successfully" time="3 days ago" variant="subtle" description="Password updated from verified IP 192.168.1.1." />
            </x-aura::timeline>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::timeline&gt;
    &lt;x-aura::timeline.item title="Two-Factor Authentication Enabled" time="1 hour ago" variant="solid" /&gt;
    &lt;x-aura::timeline.item title="New API Token Generated" time="3 hours ago" variant="subtle" /&gt;
    &lt;x-aura::timeline.item title="Password Changed" time="3 days ago" variant="subtle" /&gt;
&lt;/x-aura::timeline&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Timeline with Custom Action Slots -->
    <x-aura::code class="w-full" title="4. Timeline with Custom Action Slots">
        <x-slot:preview>
            <x-aura::timeline class="w-full">
                <x-aura::timeline.item title="Database Migration Completed" time="Just now" variant="solid" description="Migrated 24 tables without downtime.">
                    <div class="mt-2 flex items-center gap-2">
                        <x-aura::badge variant="neutral" size="sm">Schema v2.4</x-aura::badge>
                        <x-aura::button variant="secondary" size="xs">View Migration Logs</x-aura::button>
                    </div>
                </x-aura::timeline.item>
                <x-aura::timeline.item title="Server Backup Created" time="2 hours ago" variant="subtle" description="Automated daily database snapshot archived.">
                    <div class="mt-2">
                        <code class="text-[11px] font-mono bg-zinc-100 dark:bg-zinc-800 px-2 py-1 rounded text-zinc-700 dark:text-zinc-300">backup-2026-08-09.tar.gz (1.4 GB)</code>
                    </div>
                </x-aura::timeline.item>
            </x-aura::timeline>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::timeline&gt;
    &lt;x-aura::timeline.item title="Database Migration Completed" time="Just now" variant="solid"&gt;
        &lt;div class="mt-2 flex items-center gap-2"&gt;
            &lt;x-aura::badge variant="neutral" size="sm"&gt;Schema v2.4&lt;/x-aura::badge&gt;
            &lt;x-aura::button variant="secondary" size="xs"&gt;View Logs&lt;/x-aura::button&gt;
        &lt;/div&gt;
    &lt;/x-aura::timeline.item&gt;
    &lt;x-aura::timeline.item title="Server Backup Created" time="2 hours ago" variant="subtle"&gt;
        &lt;code class="text-[11px] font-mono bg-zinc-100 dark:bg-zinc-800 px-2 py-1 rounded"&gt;backup-2026-08-09.tar.gz&lt;/code&gt;
    &lt;/x-aura::timeline.item&gt;
&lt;/x-aura::timeline&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>
