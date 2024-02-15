<script setup>
import LunchLayout from "@/Layouts/LunchLayout.vue";

defineProps({
    lunchs: Object,
});
</script>

<template>
    <LunchLayout>
        <table class="w-full text-center">
            <thead>
                <tr>
                    <th class="border-2">No.</th>
                    <th class="border-2">Nama</th>
                    <th class="border-2">Asal Sekolah</th>
                    <th class="border-2">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(lunch, i) in lunchs">
                    <td class="border-2">{{ i + 1 }}</td>
                    <td class="border-2">
                        {{ lunch.ticket.participant.name }}
                    </td>
                    <td class="border-2">
                        {{ lunch.ticket.participant.school }}
                    </td>
                    <td class="border-2">
                        {{ lunch.created_at.split("T")[0] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </LunchLayout>
</template>
