<template>
    <header>
        <div
            class="px-16 mx-auto flex justify-between items-center fixed bg-fixed top-0 left-0 right-0 bg-blend-saturation p-4 bg-white overflow-auto shadow-lg"
        >
            <div class="text-2xl font-bold">Furniture Store</div>
            <nav>
                <ul class="flex space-x-6 font-poppins">
                    <li>
                        <a
                            href="#home"
                            class="text-gray-900 hover:text-gray-400"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a
                            href="#products"
                            class="text-gray-900 hover:text-gray-400"
                            >Products</a
                        >
                    </li>
                    <li>
                        <a
                            href="#about"
                            class="text-gray-900 hover:text-gray-400"
                            >About</a
                        >
                    </li>
                    <li>
                        <a
                            href="#contact"
                            class="text-gray-900 hover:text-gray-400"
                            >Contact</a
                        >
                    </li>
                    <li>
                        <div
                            id="search-toggle"
                            class="search-icon cursor-pointer pl-6"
                        >
                            <svg
                                class="fill-current pointer-events-none text-grey-darkest w-4 h-4 inline"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"
                                ></path>
                            </svg>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div
            class="relative w-full hidden bg-white shadow-xl"
            id="search-content"
        >
            <div class="container mx-auto py-4 text-black">
                <input
                    id="searchfield"
                    type="search"
                    placeholder="Search..."
                    autofocus="autofocus"
                    class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl"
                />
            </div>
        </div>
    </header>
</template>

<script>
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
