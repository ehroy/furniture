<template>
    <section class="py-12">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center mb-8">Produk Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <Product
                    v-for="product in products"
                    :key="product.id"
                    :product="product"
                />
            </div>
            <div class="flex justify-between items-center mt-8">
                <h2 class="text-3xl font-bold"></h2>
                <a href="#" class="text-blue-500">See all</a>
            </div>
        </div>
    </section>
</template>

<script>
import Product from "./Product.vue";

export default {
    components: { Product },
    data() {
        return {
            products: [
                {
                    id: 1,
                    name: "Sofa Modern",
                    description: "Sofa yang nyaman untuk ruang tamu Anda.",
                    price: "Rp 2.500.000",
                    image: "/assets/images/chair-3274474_1280.jpg",
                },
                {
                    id: 2,
                    name: "Meja Makan Minimalis",
                    description: "Meja makan elegan untuk ruang makan Anda.",
                    price: "Rp 3.000.000",
                    image: "/assets/images/chair-3274474_1280.jpg",
                },
                {
                    id: 3,
                    name: "Meja Makan Minimalis",
                    description: "Meja makan elegan untuk ruang makan Anda.",
                    price: "Rp 3.000.000",
                    image: "/assets/images/chair-3274474_1280.jpg",
                },
            ],
        };
    },
};
</script>
