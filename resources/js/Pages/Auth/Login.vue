<template>
    <div class="p-6 bg-indigo-darker min-h-screen flex justify-center items-center">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="submit">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email Address
                    </label>
                    <text-input v-model="form.email" :errors="$page.errors.email" class="mt-10" label="Email"  id="email" type="email" autofocus autocapitalize="off" />

                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <text-input v-model="form.password" class="mt-6" label="Password" id="password" type="password" />
<!--                    <p class="text-red-500 text-xs italic">Please choose a password.</p>-->
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-black hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm link" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>

</template>
<script>

    import TextInput from '@/Shared/TextInput'

    export default {
        components: {
            TextInput
        },
        props: {
            errors: Object,
        },
        data() {
            return {
                sending: false,
                form: {
                    email: null,
                    password: null,
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.post(this.route('login.attempt'), {
                    email: this.form.email,
                    password: this.form.password,
                });
            },
        },
    }
</script>
