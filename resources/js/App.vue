<template>
    <div class="vue">
        <Nav />
        <div class="container">
            <router-view />
        </div>
        <Footer />
    </div>
</template>
<script>
import Nav from "./components/Header.vue";
import Footer from './components/Footer.vue'
export default {
    data() {
        return {
            name: "mohamed hamed elseadf",
        };
    },
    components: {
        Nav,
        Footer
    },
};
</script>
