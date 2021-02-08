<template>
    <div>
        <Nav/>
        <div class="container">
            <div class="mt-5 d-flex justify-content-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal" @click="addProduct">Add
                </button>
            </div>
            <table class="table table-hover table-striped mt-2">
                <thead>
                <tr>
                    <th>Names</th>
                    <th>Prices</th>
                    <th>Descriptions</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="product in products" :key="product.id">
                    <td>{{ product.name }}</td>
                    <td>{{ product.price }}</td>
                    <td>{{ product.description }}</td>
                    <td>
                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal"
                                @click="editProduct(product.id)">Edit
                        </button>
                        <button class="btn btn-sm btn-danger" @click="deleteProduct(product.id)">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="modal" ref="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" v-model="name" required>
                        <div class="mb-3"></div>
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control" v-model="price" required>
                        <div class="mb-3"></div>
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control"
                               v-model="description" required>
                        <div class="mb-3"></div>
                        <input type="file" name="image" id="image" ref="image" class="form-control"
                               v-on:change="handleFile">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="saveProduct">Save
                            changes
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import Nav from "./Nav";

export default {
    data() {
        return {
            products: [],
            id: 0,
            name: "",
            price: "",
            description: "",
            file: "",
        };
    },
    name: "Product",
    components: {Nav},
    methods: {
        loadProducts() {
            this.$http.get("/api/product")
                .then(({data}) => this.products = data.products);
        },
        addProduct() {
            this.id = 0;
            this.name = "";
            this.price = "";
            this.description = "";
            this.$refs.image.value = null;
        },
        editProduct(id) {
            const product = this.products.find(product => product.id == id);
            this.id = product.id;
            this.name = product.name;
            this.price = product.price;
            this.description = product.description;
            this.$refs.image.value = null;
        },
        saveProduct() {
            let save;

            let form = new FormData();
            form.append('image', this.file);
            form.append('name', this.name);
            form.append('price', this.price);
            form.append('description', this.description);

            if (this.id == 0)
                save = this.$http.post("/api/product", form, {headers: {'Content-Type': 'multipart/form-data'}});
            else
                save = this.$http.put(`/api/product/${this.id}`, form, {headers: {'Content-Type': 'multipart/form-data'}});

            save.then(() => {
                this.loadProducts();
                this.$refs.modal.classList.remove("show");
            }).catch(({response: {data}}) => {
                console.log(data);
            })
        },
        deleteProduct(id) {
            this.$http.delete(`/api/product/${id}`)
                .then(() => {
                    this.loadProducts();
                    this.$refs.modal.classList.remove("show");
                })
                .catch(({response: {data}}) => {
                    console.log(data);
                })
        },
        handleFile() {
            this.file = this.$refs.image.files[0];
        },
    },
    mounted() {
        this.loadProducts();
    }
}
</script>

<style scoped>

</style>
