<script setup>
import { Html5QrcodeScanner } from "html5-qrcode";
import { onMounted, ref } from "vue";
import SnackLayout from "@/Layouts/SnackLayout.vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    tickets: Object,
});

const ticket = ref();
function onScanSuccess(decodedText, decodedResult) {
    let obj = props.tickets.find((ticket) => ticket.code === decodedText);
    ticket.value = obj;
}

onMounted(() => {
    let html5QrcodeScanner = new Html5QrcodeScanner("reader", {
        fps: 10,
        qrbox: 250,
    });
    html5QrcodeScanner.render(onScanSuccess);
});

function submit() {
    return alert("Berhasil klaim tiket!");
}
</script>

<template>
    <SnackLayout>
        <div class="w-full" id="reader"></div>
        <div id="ticket-info" v-if="ticket">
            <table class="w-full text-left mx-2">
                <tr>
                    <th>Nama</th>
                    <td>{{ ticket.participant.name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ ticket.participant.email }}</td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <td>{{ ticket.participant.phone }}</td>
                </tr>
                <tr>
                    <th>Asal Sekolah</th>
                    <td>{{ ticket.participant.school }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ ticket.participant.status }}</td>
                </tr>
            </table>
            <Link
                class="w-full bg-green-600 hover:bg-green-500 font-semibold text-white p-2 rounded-md mt-2"
                @click="submit"
                href="/snack/submit"
                :data="{ ticket_id: ticket.id }"
                method="post"
                as="button"
            >
                SUBMIT
            </Link>
        </div>
    </SnackLayout>
</template>
