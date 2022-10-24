<template>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <router-link class="navbar-brand" to="/">Home</router-link>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#"
                        >Home</a
                    >
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <router-link class="nav-link" to='/contact-us'>Contact us</router-link>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name:'Header'
}
</script>
