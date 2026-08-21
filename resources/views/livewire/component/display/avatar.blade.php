<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Avatar — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Avatar
        </x-aura::heading>

        <x-aura::subheading size="md">
            User profile images and fallback initial badges with online status indicators and rounded or square shapes.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::avatar src="https://..." initials="JD" size="md" status="online" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Image Avatars and Sizes -->
    <x-aura::code title="1. Photo Avatar Sizes">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="4" :wrap="true">

                    <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="xs" />

                    <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="sm" />

                    <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="md" />

                    <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="lg" />

                    <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="xl" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::avatar src="https://..." size="xs" />
                <x-aura::avatar src="https://..." size="sm" />
                <x-aura::avatar src="https://..." size="md" />
                <x-aura::avatar src="https://..." size="lg" />
                <x-aura::avatar src="https://..." size="xl" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Monochrome Initials Fallbacks -->
    <x-aura::code title="2. Initials Fallback Badges">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="4" :wrap="true">

                    <x-aura::avatar initials="AW" size="xs" />

                    <x-aura::avatar initials="JD" size="sm" />

                    <x-aura::avatar initials="SC" size="md" />

                    <x-aura::avatar initials="MV" size="lg" />

                    <x-aura::avatar initials="UN" size="xl" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::avatar initials="AW" size="xs" />
                <x-aura::avatar initials="JD" size="sm" />
                <x-aura::avatar initials="SC" size="md" />
                <x-aura::avatar initials="MV" size="lg" />
                <x-aura::avatar initials="UN" size="xl" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Square Shaped Avatars -->
    <x-aura::code title="3. Square Shaped Avatars">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="4" :wrap="true">

                    <x-aura::avatar initials="SQ" size="sm" :square="true" />

                    <x-aura::avatar initials="AP" size="md" :square="true" />

                    <x-aura::avatar src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80" size="lg" :square="true" />

                    <x-aura::avatar src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80" size="xl" :square="true" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::avatar initials="SQ" size="sm" :square="true" />
                <x-aura::avatar initials="AP" size="md" :square="true" />
                <x-aura::avatar src="https://..." size="lg" :square="true" />
                <x-aura::avatar src="https://..." size="xl" :square="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Presence Status Indicators -->
    <x-aura::code title="4. Presence Status Indicators">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="4" :wrap="true">

                    <x-aura::avatar initials="ON" size="md" status="online" />

                    <x-aura::avatar initials="BY" size="md" status="busy" />

                    <x-aura::avatar initials="AW" size="md" status="away" />

                    <x-aura::avatar initials="OF" size="md" status="offline" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::avatar initials="ON" size="md" status="online" />
                <x-aura::avatar initials="BY" size="md" status="busy" />
                <x-aura::avatar initials="AW" size="md" status="away" />
                <x-aura::avatar initials="OF" size="md" status="offline" />
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
                Available properties and configurations for the avatar component.
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
                            src
                        </x-aura::text>

                        <x-aura::tooltip text="Avatar image source URL path" position="top">

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
                        Image URL string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            initials
                        </x-aura::text>

                        <x-aura::tooltip text="Fallback 2-character initials string" position="top">

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
                        Initials string (e.g. JD, AW)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Dimension scale of avatar circle or square" position="top">

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
                            xs
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            lg
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            xl
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            square
                        </x-aura::text>

                        <x-aura::tooltip text="Render as rounded square instead of circle" position="top">

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

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            status
                        </x-aura::text>

                        <x-aura::tooltip text="Presence status indicator dot badge" position="top">

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

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            online
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            busy
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            away
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            offline
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>
