<template>
    <div class="container">
        <nav>
            <div class="nav-wrapper px-4">
                <router-link to=/home class="brand-logo">
                    Music
                </router-link>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <router-link to="/likes">
                            <b>Likes</b>
                        </router-link>
                    </li>
                    <li>
                        <router-link to=/author>
                            <b>Recommended by the author</b>
                        </router-link>
                    </li>
                    <li>
                        <router-link to=/genre>
                            <b>Recommended by the genre</b>
                        </router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="mt-4">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
