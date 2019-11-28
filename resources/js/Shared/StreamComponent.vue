<template>
    <div class="pt-12 text-black" v-if="streams && streams.length > 0">
        <div class="container align-content-center mx-auto text-gray-700 m-2 rounded">
            <div class="w-full font-extrabold text-3xl text-gray-900 px-6 text-center py-3">Streams</div>
            <div class="w-full text-sm font-weight-light text-gray-800 text-center py-3">

                <div v-for="stream in streams" class="w-full">

                    <iframe
                        class="iframe-container"
                        :src="'https://player.twitch.tv/?channel=' + stream.username + '&muted=true&autoplay=false'"
                        height="720"
                        width="1280"
                        frameborder="0"
                        scrolling="no"
                        allowfullscreen="true">
                    </iframe>
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

