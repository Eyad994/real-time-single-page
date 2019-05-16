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
                            :rules="emailRules"
                            label="E-mail"
                            type = "email"
                            required
                    ></v-text-field>

                    <v-text-field
                            v-model="form.password"
                            :rules="passowrdRules"
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
               axios.post('/api/auth/login',this.form)
                   .then(res => console.log(res.data))
                   .catch(error => console.log(error.response.data))
           }
        }
    }
</script>

<style>

</style>