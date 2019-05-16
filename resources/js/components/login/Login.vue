<template>
    <v-form @submit.prevent="login">
        <v-container>
            <v-layout>
                <v-flex
                        xs12
                        md4
                >
                    <v-text-field
                            v-model="form.email"
                            label="E-mail"
                            type = "email"
                            required
                    ></v-text-field>

                    <v-text-field
                            v-model="form.password"
                            label="Password"
                            type = "password"
                            required
                    ></v-text-field>
                </v-flex>
            </v-layout>
        </v-container>
        <v-btn
                color = "green"
                type="submit">
            Login
        </v-btn>
    </v-form>
</template>

<script>

    export default {
       data(){
           return {
               form :{
                   email:null,
                   password:null
               }
           }
       },
        methods:{
           login(){
               User.login(this.form)
           }
        }
    }
</script>

<style>

</style>