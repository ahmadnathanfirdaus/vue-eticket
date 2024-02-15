<script setup>
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Check In" />
    <div class="m-2">
        <nav class="font-semibold my-4 text-center">
            <Link
                class="p-2 mx-2 bg-slate-500 hover:bg-slate-400 text-white rounded-md"
                href="/checkin"
                >List</Link
            >
            <Link
                class="p-2 mx-2 bg-slate-500 hover:bg-slate-400 text-white rounded-md"
                href="/checkin/scan"
                >Scan</Link
            >
        </nav>

        <div>
            <slot />
        </div>
    </div>
</template>
