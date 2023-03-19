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
                    <v-card-actions class="justify-center">
                        <v-btn type="submit" color="green lighten-2" dark>Зареєструватися</v-btn>
                    </v-card-actions>
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
        },
        errors_all: [],
    }),
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
                            this.$toast.success('Сохраненно.')
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
    }
}
</script>
