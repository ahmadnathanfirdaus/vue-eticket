<script setup>
import TicketLayout from "@/Layouts/TicketLayout.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    tickets: Object,
    codes: Array,
});
</script>

<template>
    <TicketLayout>
        <Link
            method="post"
            href="/ticket/generate"
            as="button"
            class="p-2 bg-green-500 text-white font-semibold rounded-md hover:bg-green-400"
            >Generate Ticket
        </Link>
        <table class="w-full text-center">
            <thead>
                <tr>
                    <th class="border-2">No.</th>
                    <th class="border-2">Kode</th>
                    <th class="border-2">Nama</th>
                    <th class="border-2">Asal Sekolah</th>
                    <th class="border-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="ticket, i in tickets">
                    <td class="border-2">{{ i+1 }}</td>
                    <td class="border-2">{{ ticket.code }}</td>
                    <td class="border-2">{{ ticket.participant.name }}</td>
                    <td class="border-2">{{ ticket.participant.school }}</td>
                    <td class="border-2">{{ ticket.participant.status }}</td>
                </tr>
            </tbody>
        </table>
    </TicketLayout>
</template>
