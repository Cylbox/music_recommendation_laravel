<template>
    <v-form @submit.prevent="register">
        <v-alert type="error" v-if="Object.keys(errors_all).length > 0">
            <p v-for="err in errors_all">
                {{ err[0] }}
            </p>
        </v-alert>
        <v-row align="center" justify="center">
            <v-col md="5">
                <v-card class="px-5 py-5">
                    <v-text-field v-model="user.name" label="Ім'я" required></v-text-field>
                    <v-text-field v-model="user.email" label="Email" required></v-text-field>
                    <v-text-field v-model="user.password" label="Пароль" type="password" required></v-text-field>
                    <v-text-field v-model="user.password_confirmation" type="password" label="Підтвердіть пароль" required></v-text-field>
                    <v-dialog
                        v-model="dialog"
                        width="500"
                    >
                        <template v-slot:activator="{ on, attrs }">
                            <v-card-actions class="justify-center">
                                <v-btn v-bind="attrs"
                                       v-on="on" color="green lighten-2" dark>Зареєструватися</v-btn>
                            </v-card-actions>
                        </template>

                        <v-card>
                            <v-card-title class="text-h5 grey lighten-2">
                                Оберіть ваші улюблені жанри:
                            </v-card-title>

                            <v-card-text>
                                <v-checkbox  v-for="(genre, index) in genres" :key="index" :value="genre.id"
                                            v-model="user.genresIds"
                                            :label="genre.name"
                                             hide-details
                                ></v-checkbox>
                            </v-card-text>

                            <v-divider></v-divider>

                            <v-card-actions class="justify-center">
                                <v-btn
                                    type="submit"
                                    @click="register"
                                    color="green lighten-2" dark
                                >
                                    Завершити регістрацію
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-dialog>
                </v-card>
            </v-col>
        </v-row>
        <v-row align="center" justify="center">
            <router-link to="/login">
                <v-btn plain color="primary">Повернутись до входу</v-btn>
            </router-link>
        </v-row>
    </v-form>
</template>

<script>
import {jsonToFormData} from "../utils";

export default {
    data: () => ({
        user: {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            genresIds: [],
        },
        errors_all: [],
        dialog: false,
        genres: [],
    }),

    mounted() {
        this.fetchData()
    },

    methods: {
        register() {
            let form = Object.assign({}, this.user)
            let url = `/register`
            if (this.user.password !== this.user.password_confirmation)
                this.$toast.error(`Помилка. Паролі не співпадають!`)
            else
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post(url, jsonToFormData(form), {
                        headers: {"Content-Type": "multipart/form-data"},
                    })
                        .then((r) => {
                            localStorage.setItem('x_xsrf_token', r.config.headers['X-XSRF-TOKEN'])
                            window.token = r.config.headers['X-XSRF-TOKEN']
                            this.$toast.success('Реєстрація успішна!.')
                            this.$router.push('/home')
                        })
                        .catch((data) => {
                            const {error, errors} = data.response.data
                            if (error) {
                                this.$toast.error(`Ошибка. ${error}`)
                            }
                            if (errors) {
                                this.errors_all = errors
                                this.$nextTick(() => {
                                    this.$vuetify.goTo('#alert-error')
                                })
                            }
                        })
                })
        },
        fetchData() {
            axios.get(`/api/genres`)
                .then(({data}) => {
                    this.genres ={
                        data: {}
                    }
                    this.genres = data
                })
        },
    }
}
</script>
