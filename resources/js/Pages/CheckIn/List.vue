<script setup>
import CheckInLayout from "@/Layouts/CheckInLayout.vue";

defineProps({
    checkins: Object,
});
</script>

<template>
    <CheckInLayout>
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
                <tr v-for="(checkin, i) in checkins">
                    <td class="border-2">{{ i + 1 }}</td>
                    <td class="border-2">
                        {{ checkin.ticket.participant.name }}
                    </td>
                    <td class="border-2">
                        {{ checkin.ticket.participant.school }}
                    </td>
                    <td class="border-2">
                        {{ checkin.created_at.split("T")[0] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </CheckInLayout>
</template>
