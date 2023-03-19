<template>
    <v-app>
        <v-container class="px-16 pt-0">
            <Header></Header>
            <div class="mt-4">
                <v-main>
                    <router-view></router-view>
                </v-main>
            </div>
        </v-container>
    </v-app>
</template>

<script>
import Header from "./Header";

export default {
    components: {Header},
}
</script>
