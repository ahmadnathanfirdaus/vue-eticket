<script setup>
import SnackLayout from "@/Layouts/SnackLayout.vue";

defineProps({
    snacks: Object,
});
</script>

<template>
    <SnackLayout>
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
                <tr v-for="(snack, i) in snacks">
                    <td class="border-2">{{ i + 1 }}</td>
                    <td class="border-2">
                        {{ snack.ticket.participant.name }}
                    </td>
                    <td class="border-2">
                        {{ snack.ticket.participant.school }}
                    </td>
                    <td class="border-2">
                        {{ snack.created_at.split("T")[0] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </SnackLayout>
</template>
