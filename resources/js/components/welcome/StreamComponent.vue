<template>
    <div class="pt-24 text-black" v-if="streams && streams.length > 0">
        <div
            class="container px-3 mx-auto">

                <div>
                    <p class="text-3xl">Streams</p>
                </div>

                <div class="sm:flex md:flex">
                    <div class="flex-1">

                        <div v-for="stream in streams">
                            {{ stream.username }}
                        </div>

                    </div>

                </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'streams'
        ]
    }
</script>

