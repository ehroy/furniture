<template>
    <div class="font-primary">
        <Header />
        <HeroSection />
        <About />
        <ProductList />
        <Promo />
        <ProductAll />
        <Testimonials />
        <Footer />
    </div>
</template>

<script>
import Header from "../LandingPage/Header.vue";
import HeroSection from "../LandingPage/HeroSection.vue";
import About from "../LandingPage/About.vue";
import ProductList from "../LandingPage/ProductList.vue";
import ProductAll from "../LandingPage/ProductAll.vue";
import Testimonials from "../LandingPage/Testimonials.vue";
import Footer from "../LandingPage/Footer.vue";
import Promo from "../LandingPage/Promo.vue";

export default {
    components: {
        Header,
        HeroSection,
        About,
        ProductList,
        Testimonials,
        Footer,
        Promo,
        ProductAll,
    },
};
</script>
