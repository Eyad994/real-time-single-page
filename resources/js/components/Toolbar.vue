<template>
    <v-card
            color="grey lighten-4"
            flat
            height="200px"
            tile
    >
        <v-toolbar dense>

<!--            <v-toolbar-side-icon></v-toolbar-side-icon>-->

            <v-toolbar-title>DoMiracle</v-toolbar-title>

            <v-spacer></v-spacer>
            <router-link to="/forum">
                <v-btn flat>Forum</v-btn>
            </router-link>
            <v-btn flat>Ask Question</v-btn>
            <v-btn flat>Category</v-btn>
            <router-link to="/login">
                <v-btn flat>Login</v-btn>
            </router-link>
<!--            <v-btn icon>-->
<!--                <v-icon>search</v-icon>-->
<!--            </v-btn>-->

<!--            <v-btn icon>-->
<!--                <v-icon>favorite</v-icon>-->
<!--            </v-btn>-->

<!--            <v-btn icon>-->
<!--                <v-icon>more_vert</v-icon>-->
<!--            </v-btn>-->
        </v-toolbar>
    </v-card>
</template>

<script>
    export default {}
</script>

<style>

</style>