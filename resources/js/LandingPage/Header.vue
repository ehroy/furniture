<template>
    <header>
        <div
            class="px-16 mx-auto flex justify-between items-center fixed bg-fixed top-0 left-0 right-0 bg-blend-saturation p-4 bg-white overflow-auto shadow-lg"
        >
            <div class="text-2xl font-bold">Furniture Store</div>
            <nav>
                <ul class="flex space-x-6 font-poppins">
                    <li>
                        <a href="/" class="text-gray-900 hover:text-gray-400"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            href="/products"
                            class="text-gray-900 hover:text-gray-400"
                            >Products</a
                        >
                    </li>
                    <li>
                        <a href="/" class="text-gray-900 hover:text-gray-400"
                            >About</a
                        >
                    </li>
                    <li>
                        <a href="/" class="text-gray-900 hover:text-gray-400"
                            >Contact</a
                        >
                    </li>
                    <li>
                        <div
                            class="search-icon cursor-pointer pl-6 flex gap-2 justify-center items-center"
                        >
                            <label for="search" class="block text-gray-700"
                                ><svg
                                    class="fill-current pointer-events-none text-grey-darkest w-4 h-4 inline"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path
                                        d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"
                                    ></path>
                                </svg>
                            </label>
                            <input
                                for="search"
                                type="text"
                                id="search"
                                v-model="searchQuery"
                                class="w-full border rounded px-3 hidden hover:block"
                                placeholder="Search items..."
                            />
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
import { ref, computed } from "vue";
const items = ref([
    { id: 1, name: "Chair" },
    { id: 2, name: "Table" },
    { id: 3, name: "Lamp" },
    { id: 4, name: "Sofa" },
    { id: 5, name: "Shelf" },
]);
const searchQuery = ref("");
const filteredItems = computed(() => {
    if (searchQuery.value === "") {
        return items.value;
    }
    return items.value.filter((item) =>
        item.name.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
});
export default {
    methods: {
        contactUs() {
            const phoneNumber = "6281234567890";
            const url = `https://wa.me/${phoneNumber}`;
            window.open(url, "_blank");
        },
    },
};
</script>
