<template>
    <div class="font-primary">
        <Header />
        <HeroSection />
        <ProductPage :ProductsAll="ProductsAll" />
        <Promo />
        <Categori :Categoris="Categoris" />
        <ProductRecomended :ProductsPopuller="ProductsPopuller" />
        <Testimonials />
        <Footer />
    </div>
</template>

<script setup>
import Header from "../LandingPage/Header.vue";
import HeroSection from "../LandingPage/HeroSection.vue";
import Categori from "../LandingPage/Categori.vue";
import ProductPage from "../LandingPage/ProductPage.vue";
import ProductRecomended from "../LandingPage/ProductRecomended.vue";
import Testimonials from "../LandingPage/Testimonials.vue";
import Footer from "../LandingPage/Footer.vue";
import Promo from "../LandingPage/Promo.vue";

defineProps({
    ProductsAll: Object,
    ProductsPopuller: Object,
    Filter: String,
    Categoris: Object,
});
</script>
