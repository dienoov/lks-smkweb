<template>
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light py-lg-5">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" height="24" alt="logo">
                </a>
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
                            <a class="nav-link font-biryani-bold active" aria-current="page" href="#hero">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link font-biryani-bold" href="#about-us">About us</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link font-biryani-bold" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link font-biryani-bold" href="#services">Services</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link font-biryani-bold" href="#team">Team</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link font-biryani-bold" href="#pricing">Products</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link font-biryani-bold" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Navbar",
    mounted() {
        require("../navbar");
    },
}
</script>

<style scoped>

</style>
