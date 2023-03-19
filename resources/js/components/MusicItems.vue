<template>
    <v-row align="center" justify="center" no-gutters>
        <v-col class="mb-4 mx-2" cols="auto" v-for="(item, index) in items" :key="index">
            <v-card class="d-flex flex-column ma-0" height="200" width="230" elevation="6">
                <v-card-title>{{ item.author }} - {{ item.name }}</v-card-title>
                <v-card-subtitle class="pb-0">{{ item.genre }}</v-card-subtitle>
                <v-spacer></v-spacer>
                <v-card-actions>
                    <v-btn fab depressed dark small @click="item.plays++; playVideo(item); store(item)" color="red accent-2"><v-icon>mdi-play</v-icon></v-btn>

                    <v-spacer></v-spacer>
                    <v-btn @click="changeObjectValue(index, 'isLiked');
                                    item.isLiked ? item.likes++ : item.likes--;
                                    store(item)" fab depressed :dark="!item.isLiked"
                           small color="red accent-2"><v-icon>mdi-heart</v-icon></v-btn>
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
</template>

<script>

import {jsonToFormData} from "../utils";

export default {
    data: () => ({
        items:[],
        filter: false
    }),
    mounted() {
        let key = Object.keys(this.$route.query)[0]

        this.filter = key + '=' + this.$route.query[key]

        this.fetchData()
    },
    watch: {
        '$route.query'(query) {
            let key = Object.keys(query)[0]

            this.filter = key + '=' + this.$route.query[key]

            this.fetchData()
        }
    },
    methods: {
        log(some) {
            console.log(some);
        },
        changeObjectValue(index, valueToChange) {
            this.$set(this.items[index], valueToChange, !this.items[index][valueToChange]);
        },
        playVideo(item) {
            this.$emit('playerUrl', this.$youtube.getIdFromUrl(item.url))
            this.$emit('currentItem', item)
        },
        store(item) {
            let form = Object.assign({}, item)
            console.log(item);
            let url = `/api/songs/` + item.id
            form._method = 'PUT'
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
            if (this.filter) {
                axios.get(`/api/songs` + '?' + this.filter)
                    .then(({data}) => {
                        this.items ={
                            data: {}
                        }
                        this.items = data.data
                    })
            } else {
                axios.get(`/api/songs`)
                    .then(({data}) => {
                        this.items ={
                            data: {}
                        }
                        this.items = data.data
                    })
            }
        }
    },
}
</script>

