<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Switch — Aura Wire')] 
class extends Component {
    public bool $emailNotifs = true;
    public bool $smsAlerts = false;
    public bool $twoFactor = true;
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Form
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Switch
        </x-aura::heading>

        <x-aura::subheading size="md">
            Interactive toggle switches for binary settings and real time state preferences.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::switch wire:model="emailNotifs" label="Email Notifications" description="Receive daily digest." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Toggle Switch -->
    <x-aura::code title="1. Basic Toggle Switch">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::switch wire:model.live="emailNotifs" label="Enable Notifications" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::switch wire:model="emailNotifs" label="Enable Notifications" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Switch with Description -->
    <x-aura::code title="2. Switch with Description Subtitle">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::switch
                    wire:model.live="twoFactor"
                    label="Two Factor Authentication"
                    description="Require a hardware key or authenticator code during login."
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::switch
                    wire:model="twoFactor"
                    label="Two Factor Authentication"
                    description="Require a hardware key or authenticator code during login."
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Switch Sizes -->
    <x-aura::code title="3. Switch Sizing Scale">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="4">

                    <x-aura::switch size="sm" label="Small Switch (size=sm)" :checked="true" />

                    <x-aura::switch size="md" label="Medium Switch (size=md)" :checked="true" />

                    <x-aura::switch size="lg" label="Large Switch (size=lg)" :checked="true" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::switch size="sm" label="Small (sm)" :checked="true" />
                <x-aura::switch size="md" label="Medium (md)" :checked="true" />
                <x-aura::switch size="lg" label="Large (lg)" :checked="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Settings Card -->
    <x-aura::code title="4. Real World Preferences Card">

        <x-slot:preview>

            <x-aura::card size="2xl" padding="xl" gap="6">

                <x-aura::heading level="3" size="md">
                    Notification Preferences
                </x-aura::heading>

                <x-aura::flex direction="col" gap="4">

                    <x-aura::switch
                        wire:model.live="emailNotifs"
                        label="Product Updates"
                        description="Receive release notes and feature announcements."
                    />

                    <x-aura::separator />

                    <x-aura::switch
                        wire:model.live="smsAlerts"
                        label="SMS Security Alerts"
                        description="Instant SMS text upon suspicious login attempts."
                    />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" padding="xl" gap="6">
                    <x-aura::heading level="3" size="md">
                        Notification Preferences
                    </x-aura::heading>

                    <x-aura::flex direction="col" gap="4">
                        <x-aura::switch
                            label="Product Updates"
                            description="Receive release notes and feature announcements."
                            :checked="true"
                        />

                        <x-aura::separator />

                        <x-aura::switch
                            label="SMS Security Alerts"
                            description="Instant SMS text upon suspicious login attempts."
                        />
                    </x-aura::flex>
                </x-aura::card>
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
                Available properties and configurations for the toggle switch component.
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
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Primary switch label text" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Label text string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            description
                        </x-aura::text>

                        <x-aura::tooltip text="Secondary description text below label" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Description string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Track and thumb size scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        md
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            lg
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>
