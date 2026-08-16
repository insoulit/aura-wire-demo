<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Guest Portal — Design Blocks & Templates | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-6xl space-y-16 py-2">

    <!-- Hero Header Section (Vertically Centered with Mouse Scroll Down Icon) -->
    <section class="min-h-[calc(100vh-8rem)] flex flex-col justify-center items-center py-6 text-center max-w-4xl mx-auto w-full space-y-8">
        
        <!-- Hero Main Content -->
        <div class="space-y-6 max-w-3xl mx-auto flex flex-col items-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-zinc-100 dark:bg-zinc-800/80 border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs">
                <x-aura::badge variant="neutral" size="sm">Showcase</x-aura::badge>
                <x-aura::text size="xs" variant="subtle" weight="medium">Guest Portal</x-aura::text>
            </div>

            <div class="space-y-2 text-center max-w-xl mx-auto">
                <x-aura::heading level="1" size="display-md">
                    Blocks & Templates
                </x-aura::heading>

                <div class="max-w-lg mx-auto">
                    <x-aura::subheading size="md">
                        Copy-paste composite design blocks with live previews, or explore complete end-to-end full page application templates.
                    </x-aura::subheading>
                </div>
            </div>

            <!-- Quick Jump Section Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                <x-aura::button variant="primary" size="lg" href="#design-block" icon="layers">
                    <span>Blocks</span>
                </x-aura::button>
                <x-aura::button variant="secondary" size="lg" href="#full-template" icon="globe">
                    <span>Templates</span>
                </x-aura::button>
            </div>
        </div>

        <!-- Mouse Scroll Down Icon Indicator -->
        <a href="#design-block" class="pt-6 flex flex-col items-center gap-2 text-zinc-400 hover:text-zinc-900 dark:text-zinc-500 dark:hover:text-white transition-colors cursor-pointer group select-none">
            <div class="w-6 h-10 rounded-full border-2 border-zinc-300 dark:border-zinc-700 flex justify-center p-1.5 group-hover:border-zinc-900 dark:group-hover:border-white transition-colors shadow-2xs">
                <div class="w-1.5 h-2.5 bg-zinc-400 dark:bg-zinc-500 rounded-full group-hover:bg-zinc-900 dark:group-hover:bg-white transition-all animate-bounce"></div>
            </div>
            <x-aura::text size="xs" variant="subtle">
                Scroll Down
            </x-aura::text>
        </a>
    </section>

    <!-- ========================================================================= -->
    <!-- SECTION 1: DESIGN BLOCK (5 Composite UI Pattern Cards) -->
    <!-- ========================================================================= -->
    <div id="design-block" class="space-y-8 scroll-mt-24 pt-4">
        <!-- Section 1 Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="space-y-1">
                <x-aura::heading level="2" size="lg">Design Block</x-aura::heading>
                <x-aura::subheading>Composite UI pattern blocks with live preview controls and copyable Blade markup.</x-aura::subheading>
            </div>
            <div class="flex items-center gap-3">
                <x-aura::badge variant="subtle" size="sm">5 Blocks</x-aura::badge>
            </div>
        </div>

        <!-- Section 1 Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- BLOCK 1: Product Card -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="shopping-bag"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">E-Commerce</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Product Card
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Product showcase cards with discount badges, color swatches, stock tags, and add-to-cart actions.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/product-card"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 2: Pricing Tier Cards -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="sparkles"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">SaaS</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Pricing Tier Cards
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                3-tier SaaS subscription pricing matrix with feature checklists and highlighted popular tier.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/pricing"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 3: Dashboard Widgets -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="bar-chart-3"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Analytics</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Dashboard Widgets
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Sales KPI summary cards, team activity avatar stacks, and cluster memory capacity progress gauges.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/dashboard"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 4: Auth & Security -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="shield-check"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Security</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Auth &amp; Security
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-security sign-in card with email icon prefix, password field, remember me checkbox, and submit action.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/auth"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 5: User Profile -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="user"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Account</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                User Profile
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Account settings card with avatar photo uploader, verified email tag, name input fields, and save actions.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/profile"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 6: Hero Header -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="layout"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Landing</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Hero Header
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-impact landing page hero section with kicker, main title, subheading, and CTA action buttons.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/hero"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 7: Feature Grid -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="grid"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Features</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Feature Grid
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                3-column feature highlights with icon tags, headings, and description cards.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/feature"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 8: CTA Banner -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="zap"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Conversion</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                CTA Banner
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-converting banner card with special offer badge, title, and action button.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/cta"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 9: Testimonial -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="heart"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Reviews</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Testimonial
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Customer review card with star ratings, quotes, avatar initials, and company titles.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/testimonial"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 10: Modal -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="layers"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Overlay</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Modal
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Interactive dialog modal overlay popups with backdrop blur, form fields, and action buttons.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/modal"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 11: Slide Over -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="sidebar"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Drawer</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Slide Over
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Sliding side drawer panels for filter panels, detail views, and mobile menus.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/slide-over"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 12: Timeline -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="clock"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Activity</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Timeline
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                System deployment and audit log timeline stream with status dots and timestamps.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/timeline"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 13: Empty State -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="folder-open"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">States</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Empty State
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                First-time onboarding empty state card with folder icon, description, and create button.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/empty-state"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 14: FAQ Accordion -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="help-circle"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Support</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                FAQ Accordion
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Expandable FAQ card accordion for help centers and common product questions.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/faq"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 15: Footer -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="compass"  size="sm" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Structure</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Footer
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Multi-column application footer with brand info, link lists, and copyright bar.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/navigation"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- SECTION 2: FULL TEMPLATE (5 End-to-End Application Templates) -->
    <!-- ========================================================================= -->
    <div id="full-template" class="space-y-8 scroll-mt-24 pt-8 sm:pt-12">
        <!-- Section 2 Header -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="space-y-1">
                <x-aura::heading level="2" size="lg">Full Template</x-aura::heading>
                <x-aura::subheading>Explore complete end-to-end page layout templates built with Aura Wire components.</x-aura::subheading>
            </div>
            <div class="flex items-center gap-3">
                <x-aura::badge variant="subtle" size="sm">5 Templates</x-aura::badge>
            </div>
        </div>

        <!-- Section 2 Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- TEMPLATE 1: E-Commerce Storefront -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="shopping-bag"  size="sm" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                E-Commerce Storefront
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Product catalogs, filtering sidebars, shopping cart drawers, and checkout flow pages.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/ecommerce"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 2: Personal Portfolio -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="palette"  size="sm" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Personal Portfolio
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Work showcases, interactive case studies, bio highlights, skill chips, and contact forms.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/portfolio"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 3: Restaurant & Dining -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="utensils"  size="sm" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Restaurant &amp; Dining
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Digital menu tabbed sections, table reservation pickers, chef specials, and dining reviews.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/restaurant"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 4: SaaS Application -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="rocket"  size="sm" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                SaaS Application
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-converting landing page, pricing comparison tables, feature grids, and signup flows.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/saas"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 5: Creative Agency -->
            <x-aura::card >
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="zap"  size="sm" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" >
                                Creative Agency
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Bold agency presentation, service cards, client logos, team profiles, and proposal requests.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/agency"  icon-trailing="arrow-right">
                            <span>Explore</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

        </div>
    </div>
</div>
