<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Alert — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Feedback
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Alert
        </x-aura::heading>

        <x-aura::subheading size="md">
            Contextual feedback callouts for status updates, system warnings, product announcements, and inline notices.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::alert variant="info" title="System Notice" description="Maintenance scheduled." :dismissible="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Subtle Status Alerts -->
    <x-aura::code title="1. Subtle Status Alerts">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="3">

                    <x-aura::alert variant="info" title="System Update" description="Server maintenance is planned for tonight at 02:00 UTC." :dismissible="true" />

                    <x-aura::alert variant="success" title="Payment Authorized" description="Your subscription auto renewed successfully." :dismissible="true" />

                    <x-aura::alert variant="warning" title="Storage Notice" description="You have used 92% of your available team storage." :dismissible="true" />

                    <x-aura::alert variant="danger" title="Deployment Failure" description="Build process exited with non zero status." :dismissible="true" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::alert variant="info" title="System Update" description="Server maintenance is planned for tonight at 02:00 UTC." :dismissible="true" />
                <x-aura::alert variant="success" title="Payment Authorized" description="Your subscription auto renewed successfully." :dismissible="true" />
                <x-aura::alert variant="warning" title="Storage Notice" description="You have used 92% of your available team storage." :dismissible="true" />
                <x-aura::alert variant="danger" title="Deployment Failure" description="Build process exited with non zero status." :dismissible="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Left Accent Border Alerts -->
    <x-aura::code title="2. Left Accent Alerts">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="3">

                    <x-aura::alert layout="left-accent" variant="primary" title="Monochrome Standard" description="High contrast neutral left border highlight accent." />

                    <x-aura::alert layout="left-accent" variant="success" title="Backup Complete" description="Nightly snapshot archived to secondary cold storage." />

                    <x-aura::alert layout="left-accent" variant="danger" title="API Quota Exceeded" description="Rate limit reached for the current billing interval." />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::alert layout="left-accent" variant="primary" title="Monochrome Standard" description="High contrast neutral left border highlight accent." />
                <x-aura::alert layout="left-accent" variant="success" title="Backup Complete" description="Nightly snapshot archived to secondary cold storage." />
                <x-aura::alert layout="left-accent" variant="danger" title="API Quota Exceeded" description="Rate limit reached for the current billing interval." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Solid High Contrast Alerts -->
    <x-aura::code title="3. Solid High Contrast Alerts">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="3">

                    <x-aura::alert layout="solid" variant="primary" title="Critical System Alert" description="Database connection restored. All background jobs resuming normally." :dismissible="true" />

                    <x-aura::alert layout="solid" variant="danger" title="Access Denied" description="You do not have administrative permissions to modify this group." :dismissible="true" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::alert layout="solid" variant="primary" title="Critical System Alert" description="Database connection restored." :dismissible="true" />
                <x-aura::alert layout="solid" variant="danger" title="Access Denied" description="You do not have administrative permissions." :dismissible="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Announcement Alert with Action Slot -->
    <x-aura::code title="4. Announcement Alert with Action">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::alert layout="announcement" badge="NEW" title="Aura Wire v1.6.1 Released" description="Check out new full width card modes, accordion sizes, and input width controls.">

                    <x-slot:action>

                        <x-aura::button variant="secondary" size="xs">
                            Changelog
                        </x-aura::button>

                    </x-slot:action>

                </x-aura::alert>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::alert layout="announcement" badge="NEW" title="Aura Wire v1.6.1 Released" description="Check out new full width card modes.">
                    <x-slot:action>
                        <x-aura::button variant="secondary" size="xs">
                            Changelog
                        </x-aura::button>
                    </x-slot:action>
                </x-aura::alert>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- Component Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Component Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the alert component.
            </x-aura::text>

        </x-aura::flex>

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Prop
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Available Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Visual intent and semantic status color scheme" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        info
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            info
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            success
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            warning
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            danger
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            dark
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            layout
                        </x-aura::text>

                        <x-aura::tooltip text="Structural surface background and border presentation" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        subtle
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            left-accent
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            solid
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            announcement
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            dismissible
                        </x-aura::text>

                        <x-aura::tooltip text="Display close button to allow user dismissal" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>
