<template>
    <section class="py-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    v-for="product in products"
                    :key="product.id"
                    class="bg-white rounded-lg shadow-md overflow-hidden"
                >
                    <img
                        :src="product.image"
                        alt="product.name"
                        class="w-full h-48 object-cover"
                    />
                    <div class="p-6">
                        <p class="text-green-500 font-semibold mb-1">
                            {{ product.discount }}% Discount
                        </p>
                        <h3 class="text-2xl font-bold mb-2">
                            {{ product.name }}
                        </h3>
                        <button
                            class="bg-blue-400 text-white py-2 px-4 rounded"
                        >
                            Shop Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            products: [
                {
                    id: 1,
                    name: "Luxurious Sofa Set Collection",
                    discount: 10,
                    image: "/assets/images/interior-3530455_1280.jpg",
                },
                {
                    id: 2,
                    name: "New Combo Collection",
                    discount: 5,
                    image: "/assets/images/kursi satu set meja.jpg",
                },
            ],
        };
    },
};
</script>

<style></style>
