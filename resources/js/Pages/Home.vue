<script setup>
import Main from "@/Layouts/MainLayout.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <Main>
        <a
            class="w-full bg-cyan-600 hover:bg-cyan-500 p-2 font-semibold text-white rounded-md block mb-2 text-center"
            href="/checkin/scan"
            >Tiket Check-in</a
        >
        <a
            class="w-full bg-cyan-600 hover:bg-cyan-500 p-2 font-semibold text-white rounded-md block mb-2 text-center"
            href="/snack/scan"
            >Tiket Snack</a
        >
        <a
            class="w-full bg-cyan-600 hover:bg-cyan-500 p-2 font-semibold text-white rounded-md block mb-2 text-center"
            href="/lunch/scan"
            >Tiket Makan Siang</a
        >
    </Main>
</template>
