<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <router-link to="/" class="navbar-brand" href="#">
                    <img src="img/logo.png" height="24" alt="logo">
                </router-link>
                <button class="navbar-toggler navbar-toggler-borderless border-0" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav">
                    <svg height="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                            <router-link class="nav-link font-biryani-bold" to="/team">Team</router-link>
                        </li>
                        <li class="nav-item px-2">
                            <router-link class="nav-link font-biryani-bold" to="/product">Product</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Nav",
    mounted() {
    },
}
</script>

<style scoped>

</style>
