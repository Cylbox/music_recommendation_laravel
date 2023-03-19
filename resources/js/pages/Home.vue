<template>
    <div>
        <youtube class="youtube_player" v-if="playingItemId !== ''" :video-id="playingItemId" ref="youtube"></youtube>
        <v-row align="center" justify="center" align-content="space-around">
                <h2 v-if="itemReceived">Зараз грає: {{item.author}} - {{item.name}}; Жанр: {{item.genre}}</h2>
                <h2 v-else>Почніть щось слухати :)</h2>
        </v-row>
        <v-row>
            <MusicItems @playerUrl="getIdUrl" @currentItem="getCurrentItem"></MusicItems>
        </v-row>

    </div>

</template>

<script>
import MusicItems from "../components/MusicItems";
export default {
    components: {
        MusicItems,
    },
    data: () => ({
        playingItemId: '',
        item: {},
        itemReceived: false,
    }),
    watch: {
        playingItemId() {
            setTimeout(() => this.player.playVideo(), 200);
        }
    },
    methods: {
        getIdUrl(id) {
            this.playingItemId = id
        },
        getCurrentItem(item) {
            this.item = item
            this.itemReceived = true
        },
    },
    computed: {
        player() {
            return this.$refs.youtube.player
        }
    },
}
</script>
