<template>
    <div class="container max-w-5xl mx-auto m-8">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">Sponsors</h1>
        <div class="flex leading-normal tracking-normal">

            <div class="w-full p-6">


                <carousel>
                    <slide v-for="sponsor in sponsors">
                        {{ sponsor }}
                    </slide>
                </carousel>


            </div>
        </div>
    </div>
</template>

<script>
    import { Carousel, Slide } from 'vue-carousel';
    export default {
        name: "SponsorsComponent",
        components: {
            Carousel,
            Slide
        },
        props: {
            sponsor: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>