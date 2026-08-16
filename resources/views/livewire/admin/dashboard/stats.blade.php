<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
    <x-aura::stat label="Total Users" value="30" trend="+14% month" trendDirection="neutral" icon="users" />
    <x-aura::stat label="Active Sessions" value="18" trend="98% healthy" trendDirection="neutral" icon="activity" />
    <x-aura::stat label="System Logs" value="24" trend="0 Errors" trendDirection="neutral" icon="terminal" />
    <x-aura::stat label="Aura Wire" value="v1.0" trend="Volt 1.11" trendDirection="neutral" icon="box" />
</div>
