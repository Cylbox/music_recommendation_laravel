<template>
    <v-row class="music-list" align="center" justify="center">
        <h5>listen or like something</h5>
        <div class="youtube_player">
            <youtube v-if="playingItemId !== ''" :video-id="playingItemId" ref="youtube"></youtube>
        </div>
        <MusicItems @playerUrl="getIdUrl"></MusicItems>
    </v-row>
</template>

<script>
import MusicItems from "../components/MusicItems";
export default {
    components: {
        MusicItems,
    },
    data: () => ({
        playingItemId: '',
    }),
    watch: {
        playingItemId(newId, oldId) {
            setTimeout(() => this.player.playVideo(), 200);
        }
    },
    methods: {
        getIdUrl(id) {
            this.playingItemId = id
        },
    },
    computed: {
        player() {
            return this.$refs.youtube.player
        }
    },
}
</script>
