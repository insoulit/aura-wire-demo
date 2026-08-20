<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Guest Portal — Design Blocks and Templates | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="16">

    <!-- Hero Header Section -->
    <x-aura::container as="section" size="4xl" gap="8" :center="true" screen="hero" :padding="false">

        <!-- Hero Main Content -->
        <x-aura::flex direction="col" align="center" gap="6">

            <x-aura::badge variant="neutral" size="sm">
                Guest Portal
            </x-aura::badge>

            <x-aura::flex direction="col" align="center" gap="2">

                <x-aura::display size="md" align="center">
                    Blocks and Templates
                </x-aura::display>

                <x-aura::subheading size="md" align="center">
                    Copy paste composite design blocks with live previews, or explore complete end to end full page application templates.
                </x-aura::subheading>

            </x-aura::flex>

            <!-- Quick Jump Section Buttons -->
            <x-aura::flex align="center" justify="center" gap="3" :wrap="true">

                <x-aura::button variant="primary" size="md" href="#design-block" icon="layers">
                    Blocks
                </x-aura::button>

                <x-aura::button variant="secondary" size="md" href="#full-template" icon="globe">
                    Templates
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

        <!-- Scroll Down Icon Indicator -->
        <x-aura::link href="#design-block" variant="subtle" underline="none">

            <x-aura::flex direction="col" align="center" gap="1.5">

                <x-aura::text size="sm" variant="subtle">
                    Scroll Down
                </x-aura::text>

                <x-aura::animate type="bounce">

                    <x-aura::icon name="arrow-down" size="sm" />

                </x-aura::animate>

            </x-aura::flex>

        </x-aura::link>

    </x-aura::container>

    <!-- SECTION 1: DESIGN BLOCK -->
    <x-aura::flex direction="col" gap="8" id="design-block">

        <!-- Section 1 Header -->
        <x-aura::flex justify="between" gap="4">

            <x-aura::flex direction="col" gap="none">

                <x-aura::kicker>
                    Showcase
                </x-aura::kicker>

                <x-aura::heading level="2" size="lg">
                    Design Blocks
                </x-aura::heading>

                <x-aura::subheading>
                    Composite UI pattern blocks with live preview controls and copyable Blade markup.
                </x-aura::subheading>

            </x-aura::flex>

            <x-aura::flex align="center" justify="end" gap="3">

                <x-aura::badge variant="subtle" size="sm">
                    15 Blocks
                </x-aura::badge>

            </x-aura::flex>

        </x-aura::flex>

        <!-- Section 1 Grid -->
        <x-aura::grid cols="1" sm="2" lg="3" gap="6">

            <!-- BLOCK 1: Product Card -->
            <x-aura::card href="/guest/block/product-card" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="shopping-bag" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        E Commerce
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Product Card
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Product showcase cards with discount badges, color swatches, stock tags, and add to cart actions.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 2: Pricing Tier Cards -->
            <x-aura::card href="/guest/block/pricing" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="sparkles" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        SaaS
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Pricing Tier Cards
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        3 tier SaaS subscription pricing matrix with feature checklists and highlighted popular tier.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 3: Dashboard Widgets -->
            <x-aura::card href="/guest/block/dashboard" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="bar-chart-3" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Analytics
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Dashboard Widgets
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Real time KPI metric stat tiles, trend sparklines, and compact activity stream list.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 4: Slide-Over Panel -->
            <x-aura::card href="/guest/block/slide-over" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="panel-right" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Overlay
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Slide Over Panel
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Side drawer slide over panel with header, scrollable body content, and action buttons.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 5: Modal Dialogs -->
            <x-aura::card href="/guest/block/modal" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="copy" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Overlay
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Modal Dialogs
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Confirmation dialog, form modal, and destruct action modal with accessible backdrops.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 6: Call to Action -->
            <x-aura::card href="/guest/block/cta" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="megaphone" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Marketing
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Call to Action
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        High conversion banner sections with email capture inputs, badges, and action triggers.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 7: Feature Matrix -->
            <x-aura::card href="/guest/block/feature" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="grid" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Marketing
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Feature Matrix
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Multi column feature grid layouts with icon badges, step flows, and feature comparison.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 8: Testimonial Cards -->
            <x-aura::card href="/guest/block/testimonial" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="message-square" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Social Proof
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Testimonial Cards
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Customer review cards with avatar pictures, star ratings, and company role badges.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 9: Navigation Header -->
            <x-aura::card href="/guest/block/navigation" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="menu" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Structure
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Navigation Header
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Responsive top app navigation bar with brand logo, nav links, and user menu.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 10: Auth Forms -->
            <x-aura::card href="/guest/block/auth" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="lock" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Security
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Auth Forms
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Login, registration, and password recovery cards with form fields and social providers.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 11: User Profile Cards -->
            <x-aura::card href="/guest/block/profile" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="user" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        Account
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        User Profile Cards
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Profile header banner with avatar upload, edit info form, and account status tags.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 12: Timeline -->
            <x-aura::card href="/guest/block/timeline" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="git-commit" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Activity
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Timeline
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        System deployment and audit log timeline stream with status dots and timestamps.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 13: Empty State -->
            <x-aura::card href="/guest/block/empty-state" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="folder-open" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        States
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Empty State
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        First time onboarding empty state card with folder icon, description, and create button.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 14: FAQ Accordion -->
            <x-aura::card href="/guest/block/faq" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="help-circle" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Support
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        FAQ Accordion
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Expandable FAQ card accordion for help centers and common product questions.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- BLOCK 15: Hero Header -->
            <x-aura::card href="/guest/block/hero" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="layout" size="lg" :container="true" />

                    <x-aura::badge variant="subtle" size="sm">
                        Marketing
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Hero Header
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Full width landing hero with pill badges, headline typography, and action triggers.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

    <!-- SECTION 2: FULL TEMPLATES -->
    <x-aura::flex direction="col" gap="8" id="full-template">

        <!-- Section 2 Header -->
        <x-aura::flex justify="between" gap="4">

            <x-aura::flex direction="col" gap="none">

                <x-aura::kicker>
                    Showcase
                </x-aura::kicker>

                <x-aura::heading level="2" size="lg">
                    Full Templates
                </x-aura::heading>

                <x-aura::subheading>
                    Explore complete end to end page layout templates built with Aura Wire components.
                </x-aura::subheading>

            </x-aura::flex>

            <x-aura::flex align="center" justify="end" gap="3">

                <x-aura::badge variant="subtle" size="sm">
                    5 Templates
                </x-aura::badge>

            </x-aura::flex>

        </x-aura::flex>

        <!-- Section 2 Grid -->
        <x-aura::grid cols="1" sm="2" lg="3" gap="6">

            <!-- TEMPLATE 1: E Commerce Storefront -->
            <x-aura::card href="/guest/template/ecommerce" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="shopping-bag" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        E Commerce
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        E Commerce Storefront
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Product catalogs, filtering sidebars, shopping cart drawers, and checkout flow pages.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- TEMPLATE 2: Personal Portfolio -->
            <x-aura::card href="/guest/template/portfolio" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="palette" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        Portfolio
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Personal Portfolio
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Work showcases, interactive case studies, bio highlights, skill chips, and contact forms.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- TEMPLATE 3: Restaurant and Dining -->
            <x-aura::card href="/guest/template/restaurant" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="utensils" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        Hospitality
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Restaurant and Dining
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Digital menu tabbed sections, table reservation pickers, chef specials, and dining reviews.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- TEMPLATE 4: SaaS Application -->
            <x-aura::card href="/guest/template/saas" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="rocket" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        SaaS
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        SaaS Application
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        High converting landing page, pricing comparison tables, feature grids, and signup flows.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

            <!-- TEMPLATE 5: Creative Agency -->
            <x-aura::card href="/guest/template/agency" wire:navigate gap="4">

                <x-aura::flex align="start" justify="between" gap="3">

                    <x-aura::icon name="zap" size="lg" :container="true" />

                    <x-aura::badge variant="neutral" size="sm">
                        Agency
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="sm">
                        Creative Agency
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Bold agency presentation, service cards, client logos, team profiles, and proposal requests.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::text size="sm" weight="semibold">
                        Explore
                    </x-aura::text>

                    <x-aura::icon name="arrow-right" size="xs" />

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</x-aura::flex>
