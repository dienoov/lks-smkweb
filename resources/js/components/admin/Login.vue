<template>
    <div>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center mt-2">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="font-biryani-bold py-3">Welcome back to smkweb</h5>
                            <form @submit.prevent="login()">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" v-model="email"
                                       required>
                                <div class="mb-3"></div>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                       v-model="password" required>
                                <p class="text-danger">{{ errors }}</p>
                                <div class="mb-3"></div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: "",
            password: "",
            errors: "",
        };
    },
    name: "Login",
    methods: {
        login() {
            this.$http.post("/api/auth/login", {email: this.email, password: this.password})
                .then(({data}) => {
                    localStorage.setItem("token", `Bearer ${data.token}`);
                    this.$router.push("/admin");
                })
                .catch(({response: {data}}) => {
                    this.errors = data.message;
                });
        }
    }
}
</script>

<style scoped>

</style>
