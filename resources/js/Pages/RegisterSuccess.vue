<script setup>
import { Head, Link } from "@inertiajs/vue3";
defineProps({
    ticket: Object,
    qrCode: String,
});
</script>

<template>
    <div
        class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8"
    >
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
            <img src="../Assets/itts.png" alt="ITTS" class="h-20 inline" />
            <img src="../Assets/bem.png" alt="BEM ITTS" class="h-20 inline" />
            <h2
                class="mt-4 text-2xl font-bold leading-9 tracking-tight text-gray-900"
            >
                Simpan QR Code ini untuk check-in
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:max-w-sm text-center">
            <div class="px-10 py-3 mb-10 rounded-lg">
                <p class="text-center" v-html="qrCode"></p>
                <h1 class="text-sm font-semibold">{{ ticket.code }}</h1>
            </div>
            <Link
                class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                href="/register"
                >Kembali</Link
            >
        </div>
    </div>
</template>
