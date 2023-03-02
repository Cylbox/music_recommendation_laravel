<template>
  <v-app>
    <v-app-bar app v-if="$vuetify.breakpoint.mobile">
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title>Админ-панель</v-toolbar-title>
    </v-app-bar>
    <v-main>
      <div class="pa-6">
        <router-view/>
      </div>
    </v-main>
  </v-app>
</template>
<script>
export default {
  data: () => ({drawer: true}),
}
</script>
<style>
.theme--light.v-application {
  background-color: #f4f5fa!important;
}
</style>
