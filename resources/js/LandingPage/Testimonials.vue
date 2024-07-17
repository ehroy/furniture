<template>
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">Testimoni Pelanggan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    v-for="testimonial in testimonials"
                    :key="testimonial.id"
                    class="bg-white p-6 rounded-lg shadow-md"
                >
                    <p class="text-gray-700 mb-4">{{ testimonial.message }}</p>
                    <h3 class="text-lg font-semibold">
                        {{ testimonial.name }}
                    </h3>
                    <p class="text-gray-600">{{ testimonial.location }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            testimonials: [
                {
                    id: 1,
                    name: "John Doe",
                    message:
                        "Produk-produk dari Toko Furniture Kami sangat berkualitas dan nyaman digunakan.",
                    location: "Jakarta",
                },
                {
                    id: 2,
                    name: "Jane Smith",
                    message:
                        "Pelayanan yang sangat baik dan ramah, sangat puas dengan pembelian saya.",
                    location: "Bandung",
                },
            ],
        };
    },
};
</script>
