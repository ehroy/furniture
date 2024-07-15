<template>
    <div class="bg-white p-6 rounded-lg text-center">
        <img
            :src="product.image"
            alt="product.name"
            class="w-full h-56 object-cover mb-4 rounded"
        />
        <a href="" class="text-xl">{{ product.name }}</a>
        <p class="text-sm mt-2">{{ product.price }}</p>
        <!-- <button
            @click="redirectToWhatsApp(product.id)"
            class="mt-4 bg-blue-400 text-white py-2 px-4 rounded"
        >
            Pesan Sekarang
        </button> -->
    </div>
</template>

<script>
export default {
    props: ["product"],
    methods: {
        redirectToWhatsApp(productId) {
            const message = `Halo, saya tertarik dengan produk dengan ID ${productId}. Bisa saya dapatkan detailnya?`;
            const phoneNumber = "6281234567890";
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(
                message
            )}`;
            window.open(url, "_blank");
        },
    },
};
</script>
