<template>
    <div class="pt-12 text-black" v-if="sponsors && sponsors.length > 0">
        <div class="container align-content-center mx-auto text-gray-700 m-2 rounded">
            <div class="w-full font-extrabold text-3xl text-gray-900 px-6 text-center py-3">Sponsors</div>
            <div class="w-full text-sm font-weight-light text-gray-800 text-center py-3" v-for="sponsor in sponsors">
                    <a class="link" :href="sponsor.url">{{ sponsor.name }} </a>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        props: [
            'sponsors'
        ]
    }
</script>

