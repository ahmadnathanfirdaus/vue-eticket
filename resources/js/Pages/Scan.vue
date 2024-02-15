<script setup>
import { Head } from "@inertiajs/vue3";
import { Html5QrcodeScanner } from "html5-qrcode";
import { onMounted, ref } from "vue";
import Main from "@/Layouts/MainLayout.vue";

const participantId = ref(0);

function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
    participantId.value = parseInt(decodedText);
    document.getElementById("participant-info").style.display = "table";
}

onMounted(() => {
    let html5QrcodeScanner = new Html5QrcodeScanner("reader", {
        fps: 10,
        qrbox: 250,
    });
    html5QrcodeScanner.render(onScanSuccess);
});

const props = defineProps({
    participants: Object,
});


</script>

<template>
    <Head title="Dashboard" />

    <Main>
        <!-- <h1 class="font-semibold text-xl">Dashboard</h1> -->
        <div class="w-full" id="reader"></div>
        <table
            class="w-full text-left mx-2"
            id="participant-info"
            style="display: none"
        >
            <tr>
                <th>Nama</th>
                <td>{{ participants[participantId].name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ participants[participantId].email }}</td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td>{{ participants[participantId].phone }}</td>
            </tr>
        </table>
    </Main>
</template>
