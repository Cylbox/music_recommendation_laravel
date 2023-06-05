<template>
    <div class="nav-header">
        <v-app-bar class="flex-grow-0"
                   color="red accent-2"
                   dark
                   shaped>
            <v-toolbar-title>
                <router-link style="color: white" to=/home>
                    Система рекомендації музики
                </router-link>
            </v-toolbar-title>

            <v-spacer></v-spacer>

            <a v-if="token" @click.prevent="logout" href="#">
                <v-btn icon large>
                    <v-icon>mdi-logout</v-icon>
                </v-btn>
            </a>

            <router-link v-else to="/login">
                <v-btn icon large>
                    <v-icon>mdi-account</v-icon>
                </v-btn>
            </router-link>

            <router-link v-if="token" :to="{ path: '/home', query: { likes: true } }">
                <v-btn icon large>
                    <v-icon>mdi-heart</v-icon>
                </v-btn>
            </router-link>

            <router-link v-if="token" :to="{ path: '/home', query: { authors: true } }">
                <v-btn color="white" plain>Рекомендації за автором</v-btn>
            </router-link>

            <router-link v-if="token" :to="{ path: '/home', query: { genres: true } }">
                <v-btn color="white" plain>Рекомендації за жанром</v-btn>
            </router-link>
        </v-app-bar>
    </div>
</template>

<script>

export default {
    data: () => ({
        token: false
    }),

    created() {
        this.token = localStorage.getItem('x_xsrf_token')
    },

    watch: {
        '$route'(to, from) {
            if (from.name === 'login' || from.name === 'register') {
                this.token = localStorage.getItem('x_xsrf_token')
            }
        }
    },

    methods: {
        logout() {
            let url = `/logout`
            this.token = false
            localStorage.removeItem('x_xsrf_token')
            axios.post(url)
                .then((r) => {
                    this.$router.push('/login')
                })
        },
    }
}
</script>
