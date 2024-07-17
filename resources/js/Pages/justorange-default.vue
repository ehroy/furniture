<template>
    <div class="font-primary">
        <Header />
        <HeroSection />
        <About />
        <ProductPage :ProductsAll="ProductsAll" />
        <Promo />
        <ProductAll />
        <Testimonials />
        <Footer />
    </div>
</template>

<script setup>
import Header from "../LandingPage/Header.vue";
import HeroSection from "../LandingPage/HeroSection.vue";
import About from "../LandingPage/About.vue";
import ProductPage from "../LandingPage/ProductPage.vue";
import ProductAll from "../LandingPage/ProductAll.vue";
import Testimonials from "../LandingPage/Testimonials.vue";
import Footer from "../LandingPage/Footer.vue";
import Promo from "../LandingPage/Promo.vue";

defineProps({
    ProductsAll: Object,
});
</script>
