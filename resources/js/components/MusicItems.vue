<template>
    <v-row align="center" justify="center" no-gutters>
        <v-col class="mb-4 mx-2" cols="auto" v-for="(item, index) in items" :key="index">
            <v-card class="d-flex flex-column ma-0" height="200" width="230" variant="outlined">
                <v-card-title>{{ item.author }} - {{ item.name }}</v-card-title>
                <v-card-subtitle class="pb-0">{{ item.genre }}</v-card-subtitle>
                <v-spacer></v-spacer>
                <v-card-actions>
                    <v-btn @click="item.plays++; playVideo(item.url)" class="red material-icons">play_arrow</v-btn>
                    <v-spacer></v-spacer>
                    <div @click="" class="btn btn-floating btn-small red">
                        <i class="red material-icons">favorite</i>
                    </div>
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
</template>

<script>

export default {
    data: () => ({
        items:[],
        activeItem: '',
        playingItemUrl: '',
    }),
    mounted() {
        this.fetchData()
    },
    watch: {
        page() {
            this.fetchData()
        },
    },
    methods: {
        log(some) {
            console.log(some);
        },
        playVideo(url) {
            this.playingItemUrl = this.$youtube.getIdFromUrl(url)
            this.$emit('playerUrl', this.playingItemUrl)
        },
        saveForm() {
            let form = Object.assign({}, this.item)
            let url = `/api/songs/`
            axios.post(url, jsonToFormData(form), {
                    headers: {"Content-Type": "multipart/form-data"},
                })
                .then(() => {
                    this.$toast.success('Сохраненно.')
                    this.fetchData()
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
        },
        fetchData() {
            axios.get(`/api/songs`)
                .then(({data}) => {
                    this.items = {
                        data: {}
                    }
                    this.items = data.data
                })
        }
    },
}
</script>

