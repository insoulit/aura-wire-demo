<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Testimonial — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Testimonial</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" >
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Testimonial Block Preview -->
    <x-aura::code  title="Customer Review &amp; Social Proof Block">
        <x-slot:preview>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                <x-aura::card >
                    <div class="flex items-center gap-1 text-amber-400 text-sm select-none">
                        ★★★★★
                    </div>
                    <x-aura::text variant="subtle" size="sm" >
                        "Aura Wire has cut our UI development time in half. The components are extremely well crafted and responsive across all device breakpoints."
                    </x-aura::text>
                    <div class="flex items-center gap-3 pt-2">
                        <x-aura::avatar initials="JD" status="online" size="sm" />
                        <div>
                            <x-aura::heading level="4" size="xs" >Jane Doe</x-aura::heading>
                            <x-aura::text variant="subtle" size="xs">CTO at TechCorp</x-aura::text>
                        </div>
                    </div>
                </x-aura::card>

                <x-aura::card >
                    <div class="flex items-center gap-1 text-amber-400 text-sm select-none">
                        ★★★★★
                    </div>
                    <x-aura::text variant="subtle" size="sm" >
                        "The cleanest Blade component library available for TALL stack developers. Worth every single penny for production applications."
                    </x-aura::text>
                    <div class="flex items-center gap-3 pt-2">
                        <x-aura::avatar initials="MS" status="online" size="sm" />
                        <div>
                            <x-aura::heading level="4" size="xs" >Marcus Smith</x-aura::heading>
                            <x-aura::text variant="subtle" size="xs">Lead Engineer at SaaSify</x-aura::text>
                        </div>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full"&gt;
    &lt;x-aura::card class="space-y-4 p-6"&gt;
        &lt;div class="text-amber-400 text-sm"&gt;★★★★★&lt;/div&gt;
        &lt;x-aura::text variant="subtle" size="sm" class="italic"&gt;
            "Aura Wire has cut our UI development time in half. Highly recommended!"
        &lt;/x-aura::text&gt;
        &lt;div class="flex items-center gap-3 pt-2"&gt;
            &lt;x-aura::avatar initials="JD" status="online" size="sm" /&gt;
            &lt;div&gt;
                &lt;x-aura::heading level="4" size="xs"&gt;Jane Doe&lt;/x-aura::heading&gt;
                &lt;x-aura::text variant="subtle" size="xs"&gt;CTO at TechCorp&lt;/x-aura::text&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>
