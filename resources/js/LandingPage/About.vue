<template>
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Kategori</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <div
                    v-for="category in categories"
                    :key="category.id"
                    class="p-4 bg-white rounded-lg shadow-[15px_15px_15px_-15px_rgba(0.1,0.1,0.1,0.1)] flex flex-col items-center"
                >
                    <div
                        :class="
                            category.active
                                ? 'bg-blue-500 text-white'
                                : 'text-gray-700'
                        "
                        class="p-6 rounded-lg mb-4 hover:animate-bounce"
                    >
                        <img
                            :src="category.icon"
                            :alt="category.name"
                            class="w-12 h-12"
                        />
                    </div>
                    <a href="">
                        <h3
                            :class="
                                category.active
                                    ? 'text-blue-500'
                                    : 'text-gray-700'
                            "
                            class="text-xl font-semibold mb-2"
                        >
                            {{ category.name }}
                        </h3>
                    </a>
                    <p class="text-gray-600">
                        {{ category.available }} Item Available
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            categories: [
                {
                    id: 1,
                    name: "Chair",
                    available: 200,
                    icon: "https://img.icons8.com/?size=100&id=25623&format=png&color=000000",
                    active: false,
                    url: "/products/categori?=chair",
                },
                {
                    id: 2,
                    name: "Sofa",
                    available: 240,
                    icon: "https://img.icons8.com/?size=100&id=547&format=png&color=000000",
                    active: false,
                    url: "/products/categori?=sofa",
                },
                {
                    id: 3,
                    name: "Table",
                    available: 140,
                    icon: "https://img.icons8.com/?size=100&id=543&format=png&color=000000",
                    active: false,
                    url: "/products/categori?=table",
                },
                {
                    id: 4,
                    name: "Bed",
                    available: 340,
                    icon: "https://img.icons8.com/?size=100&id=561&format=png&color=000000",
                    active: false,
                    url: "/products/categori?=bed",
                },
                {
                    id: 5,
                    name: "Lamp",
                    available: 400,
                    icon: "https://img.icons8.com/?size=100&id=565&format=png&color=000000",
                    active: false,
                    url: "/products/categori?=lamp",
                },
            ],
        };
    },
};
</script>

<style></style>
