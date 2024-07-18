<template>
    <section class="py-12">
        <div class="container mx-auto">
            <div class="flex flex-wrap gap-2 justify-start mb-8">
                <Link
                    href="?filter=all"
                    class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-xl"
                    preserve-scroll
                >
                    <i class="mdi mdi-view-list"></i> Semua Produk
                </Link>
                <Link
                    href="?filter=new"
                    class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-xl"
                    preserve-scroll
                >
                    <i class="mdi mdi-moon-new"></i> Terbaru
                </Link>
                <Link
                    href="?filter=rekomendasi"
                    class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-xl"
                    preserve-scroll
                >
                    <i class="mdi mdi-star-box"></i> Rekomendasi
                </Link>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-white p-6 rounded-lg text-center"
                    v-for="(product, index) in ProductsAll"
                    :key="index"
                >
                    <img
                        :src="helpers.imageUrl(product.image[0])"
                        alt="ProductsAll.name"
                        class="w-full h-56 object-cover mb-4 rounded"
                    />
                    <Link :href="'/products/' + product.slug" class="text-xl">{{
                        product.name.toLowerCase()
                    }}</Link>
                    <br />
                    <a href="">{{ ProductsAll[index].category.name }}</a>
                    <p
                        class="text-sm mt-2 mb-3"
                        v-if="parseInt(product.price) === 0"
                    >
                        {{ helpers.rupiah(parseInt(product.price)) }}
                    </p>
                    <div v-else>
                        <Link
                            :href="'/products/' + product.slug"
                            class="text-sm mt-4 rounded-lg bg-blue-400 py-2 text-white hover:bg-blue-500 px-12"
                        >
                            Hubungi Admin
                        </Link>
                    </div>
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
                <a
                    href="/products"
                    class="text-white bg-blue-400 p-1.5 rounded-xl text-sm hover:bg-blue-500"
                    >Lihat Semua</a
                >
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
    Filter: String,
    ProductsAll: Object,
});
</script>
