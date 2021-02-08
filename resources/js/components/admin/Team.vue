<template>
    <div>
        <Nav/>
        <div class="container">
            <div class="mt-5 d-flex justify-content-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal" @click="addTeam">Add
                </button>
            </div>
            <table class="table table-hover table-striped mt-2">
                <thead>
                <tr>
                    <th>Names</th>
                    <th>Levels</th>
                    <th>Descriptions</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="team in teams" :key="team.id">
                    <td>{{ team.name }}</td>
                    <td>{{ team.level }}</td>
                    <td>{{ team.description }}</td>
                    <td>
                        <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal"
                                @click="editTeam(team.id)">Edit
                        </button>
                        <button class="btn btn-sm btn-danger" @click="deleteTeam(team.id)">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="modal" ref="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Team</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" v-model="name" required>
                        <div class="mb-3"></div>
                        <label for="level" class="form-label">Level</label>
                        <input type="text" name="level" id="level" class="form-control" v-model="level" required>
                        <div class="mb-3"></div>
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control"
                               v-model="description" required>
                        <div class="mb-3"></div>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="saveTeam">Save
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
            teams: [],
            id: 0,
            name: "",
            level: "",
            description: "",
        };
    },
    name: "Team",
    components: {Nav},
    methods: {
        loadTeams() {
            this.$http.get("/api/team")
                .then(({data}) => this.teams = data.teams);
        },
        addTeam() {
            this.id = 0;
            this.name = "";
            this.level = "";
            this.description = "";
        },
        editTeam(id) {
            const team = this.teams.find(team => team.id == id);
            this.id = team.id;
            this.name = team.name;
            this.level = team.level;
            this.description = team.description;
        },
        saveTeam() {
            let save;
            if (this.id == 0)
                save = this.$http.post("/api/team", {
                    name: this.name,
                    level: this.level,
                    description: this.description,
                })
            else
                save = this.$http.put(`/api/team/${this.id}`, {
                    name: this.name,
                    level: this.level,
                    description: this.description,
                });

            save.then(() => {
                this.loadTeams();
                this.$refs.modal.classList.remove("show");
            }).catch(({response: {data}}) => {
                console.log(data);
            })
        },
        deleteTeam(id) {
            this.$http.delete(`/api/team/${id}`)
                .then(() => {
                    this.loadTeams();
                    this.$refs.modal.classList.remove("show");
                })
                .catch(({response: {data}}) => {
                    console.log(data);
                })
        }
    },
    mounted() {
        this.loadTeams();
    }
}
</script>

<style scoped>

</style>
