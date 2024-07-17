<template>
    <Header />
    <div class="container mx-auto py-8 mt-16 font-primary">
        <!-- Filters -->
        <div class="flex justify-start mb-6">
            <button
                v-for="category in categories"
                :key="category"
                @click="selectedCategory = category"
                :class="[
                    'px-4 py-2 mx-2 rounded-lg',
                    {
                        'bg-blue-500 text-white': selectedCategory === category,
                        'bg-gray-200': selectedCategory !== category,
                    },
                ]"
            >
                {{ category }}
            </button>
        </div>

        <!-- Products Grid -->
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"
        >
            <div
                v-for="product in filteredProducts"
                :key="product.id"
                class="bg-white shadow-md rounded-lg overflow-hidden"
            >
                <img
                    :src="product.image_url"
                    alt="Product Image"
                    class="w-full h-48 object-cover"
                />
                <div class="p-4">
                    <h3 class="text-lg">{{ product.name }}</h3>
                    <p class="text-gray-600">{{ product.price }}</p>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script setup>
import { ref, computed } from "vue";
import Header from "../../LandingPage/Header.vue";
import Recomended from "../../LandingPage/ProductRecomended.vue";
import Footer from "../../LandingPage/Footer.vue";
// Data dummy untuk produk dan kategori
const selectedCategory = ref("All");
const categories = ref(["All", "Living Room", "Office", "Bedroom", "Outdoor"]);
const products = ref([
    {
        id: 1,
        name: "Aurora Chair",
        price: "€ 39,99",
        category_name: "Living Room",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 2,
        name: "Bamboo Chair",
        price: "€ 29,99",
        category_name: "Outdoor",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 3,
        name: "Office Desk",
        price: "€ 99,99",
        category_name: "Office",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 4,
        name: "Bed Frame",
        price: "€ 159,99",
        category_name: "Bedroom",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 4,
        name: "Bed Frame",
        price: "€ 159,99",
        category_name: "Bedroom",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 4,
        name: "Bed Frame",
        price: "€ 159,99",
        category_name: "Bedroom",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 4,
        name: "Bed Frame",
        price: "€ 159,99",
        category_name: "Bedroom",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 4,
        name: "Bed Frame",
        price: "€ 159,99",
        category_name: "Bedroom",
        image_url: "https://via.placeholder.com/150",
    },
    {
        id: 4,
        name: "Bed Frame",
        price: "€ 159,99",
        category_name: "Bedroom",
        image_url: "https://via.placeholder.com/150",
    },
    // Tambahkan data produk dummy lainnya di sini
]);

// Komputasi untuk memfilter produk berdasarkan kategori yang dipilih
const filteredProducts = computed(() => {
    if (selectedCategory.value === "All") {
        return products.value;
    }
    return products.value.filter(
        (product) => product.category_name === selectedCategory.value
    );
});
</script>

<style scoped>
/* Add any additional custom styles here */
</style>
