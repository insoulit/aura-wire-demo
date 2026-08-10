<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('Guest Portal — Design Blocks & Templates | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-6xl space-y-16 py-2">

    <!-- Hero Header Section (Full Height with Mouse Scroll Down Icon) -->
    <section class="min-h-[calc(100vh-10rem)] flex flex-col justify-between items-center py-4 text-center max-w-4xl mx-auto w-full">
        <!-- Top Empty Spacer for Vertical Centering -->
        <div></div>

        <!-- Hero Main Content -->
        <div class="space-y-6 max-w-3xl mx-auto flex flex-col items-center">
            <x-aura::kicker>Guest Portal &amp; Showcase</x-aura::kicker>

            <x-aura::heading level="1" size="display-sm" class="tracking-tight text-zinc-900 dark:text-white">
                Ready to Use <br class="hidden sm:block" />
                Blocks &amp; Templates
            </x-aura::heading>

            <x-aura::subheading class="max-w-xl mx-auto text-base">
                Copy-paste composite design blocks with live previews, or explore complete end-to-end full page application templates.
            </x-aura::subheading>

            <!-- Quick Jump Section Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
                <x-aura::button variant="primary" size="md" href="#design-block" icon-trailing="arrow-right">
                    1. Design Block (5) &darr;
                </x-aura::button>
                <x-aura::button variant="secondary" size="md" href="#full-template" icon-trailing="arrow-right">
                    2. Full Template (5) &darr;
                </x-aura::button>
            </div>
        </div>

        <!-- Mouse Scroll Down Icon Indicator -->
        <a href="#design-block" class="flex flex-col items-center gap-2 animate-bounce cursor-pointer group pt-6">
            <div class="w-6 h-10 rounded-full border-2 border-zinc-400 dark:border-zinc-600 flex justify-center p-1.5 group-hover:border-zinc-900 dark:group-hover:border-white transition-colors shadow-2xs">
                <div class="w-1.5 h-2.5 bg-zinc-400 dark:bg-zinc-600 rounded-full group-hover:bg-zinc-900 dark:group-hover:bg-white transition-colors"></div>
            </div>
            <x-aura::text size="xs" variant="subtle" class="font-medium tracking-wider uppercase text-[11px] group-hover:text-zinc-900 dark:group-hover:text-white transition-colors">
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
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="shopping-bag" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">E-Commerce</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Product Card
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Product showcase cards with discount badges, color swatches, stock tags, and add-to-cart actions.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/product-card" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 2: Pricing Tier Cards -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="sparkles" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">SaaS</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Pricing Tier Cards
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                3-tier SaaS subscription pricing matrix with feature checklists and highlighted popular tier.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/pricing" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 3: Dashboard Widgets -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="bar-chart-3" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Analytics</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Dashboard Widgets
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Sales KPI summary cards, team activity avatar stacks, and cluster memory capacity progress gauges.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/dashboard" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 4: Auth & Security -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="shield-check" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Security</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Auth &amp; Security
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-security sign-in card with email icon prefix, password field, remember me checkbox, and submit action.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/auth" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 5: User Profile -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="user" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Account</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                User Profile
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Account settings card with avatar photo uploader, verified email tag, name input fields, and save actions.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/profile" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 6: Hero Header -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="layout" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Landing</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Hero Header
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-impact landing page hero section with kicker, main title, subheading, and CTA action buttons.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/hero" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 7: Feature Grid -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="grid" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Features</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Feature Grid
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                3-column feature highlights with icon tags, headings, and description cards.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/feature" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 8: CTA Banner -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="zap" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Conversion</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                CTA Banner
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-converting banner card with special offer badge, title, and action button.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/cta" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 9: Testimonial -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="heart" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Reviews</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Testimonial
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Customer review card with star ratings, quotes, avatar initials, and company titles.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/testimonial" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 10: Modal -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="layers" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Overlay</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Modal
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Interactive dialog modal overlay popups with backdrop blur, form fields, and action buttons.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/modal" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 11: Slide Over -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="sidebar" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Drawer</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Slide Over
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Sliding side drawer panels for filter panels, detail views, and mobile menus.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/slide-over" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 12: Timeline -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="clock" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Activity</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Timeline
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                System deployment and audit log timeline stream with status dots and timestamps.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/timeline" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 13: Empty State -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="folder-open" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">States</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Empty State
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                First-time onboarding empty state card with folder icon, description, and create button.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/empty-state" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 14: FAQ Accordion -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="help-circle" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Support</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                FAQ Accordion
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Expandable FAQ card accordion for help centers and common product questions.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/faq" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- BLOCK 15: Footer -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 flex items-center justify-center text-zinc-900 dark:text-white shadow-2xs">
                                <x-aura::icon name="compass" class="w-5 h-5" />
                            </div>
                            <x-aura::badge variant="subtle" size="sm">Structure</x-aura::badge>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Footer
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Multi-column application footer with brand info, link lists, and copyright bar.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/block/navigation" class="w-full justify-center" icon-trailing="arrow-right">
                            Explore Block
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
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="shopping-bag" class="w-5 h-5" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                E-Commerce Storefront
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Product catalogs, filtering sidebars, shopping cart drawers, and checkout flow pages.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/ecommerce" class="w-full justify-center" icon-trailing="arrow-right">
                            View Template
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 2: Personal Portfolio -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="palette" class="w-5 h-5" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Personal Portfolio
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Work showcases, interactive case studies, bio highlights, skill chips, and contact forms.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/portfolio" class="w-full justify-center" icon-trailing="arrow-right">
                            View Template
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 3: Restaurant & Dining -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="utensils" class="w-5 h-5" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Restaurant &amp; Dining
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Digital menu tabbed sections, table reservation pickers, chef specials, and dining reviews.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/restaurant" class="w-full justify-center" icon-trailing="arrow-right">
                            View Template
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 4: SaaS Application -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="rocket" class="w-5 h-5" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                SaaS Application
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                High-converting landing page, pricing comparison tables, feature grids, and signup flows.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/saas" class="w-full justify-center" icon-trailing="arrow-right">
                            View Template
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

            <!-- TEMPLATE 5: Creative Agency -->
            <x-aura::card class="h-full hover:border-zinc-400 dark:hover:border-zinc-600 transition-all group p-6">
                <div class="h-full flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="h-11 w-11 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold shadow-2xs">
                                <x-aura::icon name="zap" class="w-5 h-5" />
                            </div>
                        </div>

                        <div class="space-y-2">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-zinc-600 dark:group-hover:text-zinc-300 transition-colors">
                                Creative Agency
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Bold agency presentation, service cards, client logos, team profiles, and proposal requests.
                            </x-aura::text>
                        </div>
                    </div>

                    <div>
                        <x-aura::button variant="primary" size="md" href="/guest/template/agency" class="w-full justify-center" icon-trailing="arrow-right">
                            View Template
                        </x-aura::button>
                    </div>
                </div>
            </x-aura::card>

        </div>
    </div>
</div>
