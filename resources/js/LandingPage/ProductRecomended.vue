<template>
    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-5xl font-extrabold text-center mb-6 text-gray-900">
                Rekomendasi Produk
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-white p-6 rounded-lg text-center"
                    v-for="(product, index) in ProductsPopuller"
                    :key="index"
                >
                    <img
                        :src="imageUrl(product.image[0])"
                        alt="ProductsAll.name"
                        class="w-full h-56 object-cover mb-4 rounded"
                    />
                    <Link :href="'/products/' + product.slug" class="text-xl">{{
                        product.name.toLowerCase()
                    }}</Link>
                    <p class="text-sm mt-2">
                        {{ helpers.rupiah(parseInt(product.price)) }}
                    </p>
                    <!-- <button
                        @click="helpers.redirectToWhatsApp(product.id)"
                        class="mt-4 bg-blue-400 text-white py-2 px-4 rounded"
                    >
                        Pesan Sekarang
                    </button> -->
                </div>
            </div>
            <div class="flex justify-between items-center mt-8">
                <h2 class="text-3xl font-bold"></h2>
                <a href="/products" class="text-blue-500">See all</a>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { defineProps } from "vue";
import { inject } from "vue";
const helpers = inject("helper");
defineProps({
    ProductsPopuller: Object,
});
function imageUrl(string) {
    const urlPattern = /^(http|https):\/\//i;

    // Check if the string matches the regular expression
    if (urlPattern.test(string)) {
        return string;
    } else {
        return "/storage/" + string;
    }
}
// export default {
//     components: { Product },
//     data() {
//         return {
//             products: [
//                 {
//                     id: 1,
//                     name: "Sofa Modern",
//                     description: "Sofa yang nyaman untuk ruang tamu Anda.",
//                     price: "Rp 2.500.000",
//                     image: "/assets/images/chair-3274474_1280.jpg",
//                 },
//                 {
//                     id: 2,
//                     name: "Meja Makan Minimalis",
//                     description: "Meja makan elegan untuk ruang makan Anda.",
//                     price: "Rp 3.000.000",
//                     image: "/assets/images/chair-3274474_1280.jpg",
//                 },
//                 {
//                     id: 3,
//                     name: "Meja Makan Minimalis",
//                     description: "Meja makan elegan untuk ruang makan Anda.",
//                     price: "Rp 3.000.000",
//                     image: "/assets/images/chair-3274474_1280.jpg",
//                 },
//             ],
//         };
//     },
// };
</script>
