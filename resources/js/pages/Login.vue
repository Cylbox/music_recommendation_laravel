<template>
    <v-form @submit.prevent="login">
        <v-alert id="alert-error" type="error" v-if="Object.keys(errors_all).length > 0">
            <p v-for="err in errors_all">
                {{ err[0] }}
            </p>
        </v-alert>
        <v-row align="center" justify="center">
            <v-col md="5">
                <v-card class="px-5 py-5">
                    <v-text-field v-model="user.email" label="Email" required></v-text-field>
                    <v-text-field v-model="user.password" type="password" label="Пароль" required></v-text-field>
                    <v-card-actions class="justify-center">
                        <v-btn type="submit" color="green lighten-2" dark>Вхід</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
        <v-row align="center" justify="center">
            Немає аккаунта? <router-link to="/register">
                                <v-btn plain color="primary">Зареєструватись</v-btn>
                            </router-link>
        </v-row>
    </v-form>
</template>

<script>
import {jsonToFormData} from "../utils";

export default {
    data: () => ({
        user: {
            email: '',
            password: '',
        },
        errors_all: [],
    }),

    methods: {
        login() {
            let form = Object.assign({}, this.user)
            let url = `/login`
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post(url, jsonToFormData(form), {
                    headers: {"Content-Type": "multipart/form-data"},
                })
                    .then((r) => {
                        localStorage.setItem('x_xsrf_token', r.config.headers['X-XSRF-TOKEN'])
                        this.$toast.success('Вхід виконано успішно!.')
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
