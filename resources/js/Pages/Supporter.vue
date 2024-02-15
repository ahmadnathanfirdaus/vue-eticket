<script setup>
import Main from "@/Layouts/MainLayout.vue";
defineProps({
    participants: Object,
});
</script>
<template>
    <Main>
        <table class="w-full text-center">
            <thead>
                <tr>
                    <th class="border-2">No.</th>
                    <th class="border-2">Nama</th>
                    <th class="border-2">Asal Sekolah</th>
                    <th class="border-2">Email</th>
                    <th class="border-2">No. Telpon</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(participant, i) in participants">
                    <td class="border-2">{{ i + 1 }}</td>
                    <td class="border-2">{{ participant.name }}</td>
                    <td class="border-2">{{ participant.school }}</td>
                    <td class="border-2">{{ participant.email }}</td>
                    <td class="border-2">{{ participant.phone }}</td>
                </tr>
            </tbody>
        </table>
    </Main>
</template>
