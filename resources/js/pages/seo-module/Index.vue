<template>
    <v-container fluid>
        <v-card>
            <v-card-title>
                Сео-модуль
                <v-spacer></v-spacer>
                <v-btn to="/admin/seo-module/create">
                    Створити
                </v-btn>
            </v-card-title>
            <v-divider class="mt-4"/>
            <v-data-table
                :loading="isLoading"
                :headers="headers"
                :items="items"
                :items-per-page="-1"
                hide-default-footer
                disable-sort
            >
                <template v-slot:item.edit="{item}">
                    <v-btn :to="`/admin/seo-module/${item.id}`" small color="primary" icon>
                        <v-icon small>
                            mdi-pencil
                        </v-icon>
                    </v-btn>
                    <v-btn @click="deleteItem(item)" small color="primary" icon>
                        <v-icon small>
                            mdi-delete
                        </v-icon>
                    </v-btn>
                    <v-btn :to="`/admin/seo-module/create-${item.id}`" small color="primary" icon>
                        <v-icon small>
                            mdi-content-copy
                        </v-icon>
                    </v-btn>
                </template>
                <template v-slot:item.url="{ item }">
                    <div class="pa-2">
                        <a :href="`${item.url}`" target="_blank">
                            {{ item.url }}
                        </a>
                    </div>
                </template>
            </v-data-table>
        </v-card>
        <v-col cols="12">
            <div class="text-center">
                <v-pagination
                    v-model="page"
                    :length="meta.last_page"
                    :total-visible="10"
                />
            </div>
        </v-col>
    </v-container>
</template>
<script>
import {jsonToFormData} from "../../utils";

export default {
    data: () => ({
        items: [],
        filters: {},
        startFilters: {},
        isLoading: false,
        headers: [
            {text: 'url', value: 'url', sort: false},
            {text: 'meta_title', value: 'meta_title', sort: false},
            {text: 'meta_description', value: 'meta_description', sort: false},
            {text: 'h1', value: 'h1', sort: false},
            {text: '', value: 'edit', sort: false},
        ],
        page: 1,
        meta: {
            last_page: 1,
            per_page: 1
        }
    }),
    created() {
        let filters = this.$queryParseToObject(this.$route)
        this.startFilters = Object.assign({}, filters)
        this.filters = Object.assign({}, filters)
    },
    mounted() {
        this.fetchData()
    },
    watch: {
        page() {
            this.fetchData()
        }
    },
    methods: {
        deleteItem(item){
            this.$http.delete(`/api/seo-module/${item.id}`)
                .then(() => {
                    this.fetchData()
                    this.$toast.info('Изменения с модуля удалены.')
                })
        },
        fetchData() {
            let query = Object.assign({}, this.filters)
            query.page = this.page

            if (JSON.stringify(this.startFilters) !== JSON.stringify(this.filters)) {
                this.$router.push({query})
            }

            this.isLoading = true
            this.$http
                .get(this.$query(`/api/seo-module`, query))
                .then(({data}) => {
                    this.items = data.data
                    this.meta.last_page = data.meta.last_page
                    this.meta.per_page = data.meta.per_page
                })
                .finally(() => {
                    this.isLoading = false
                })
        }
    }
}
</script>
