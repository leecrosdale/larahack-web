<template>
    <div>
        <h1 class="text-3xl">Projects</h1>

        <div v-for="hackathon in hackathons">
            <h2 class="text-xl">{{ hackathon.name }}</h2>
            <div class="flex flex-wrap">
                <div class="flex flex-wrap">
                    <div v-for="project in hackathon.projects">
                        <div class="flex-auto w-auto h-auto px-4 bg-gray-300 py-2 m-2">
                            <div class="max-w-xs rounded overflow-hidden shadow-lg my-2">
                                <img class="w-full" :src="project.image" alt="Sunset in the mountains">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ project.title }}</div>
                                    <p class="text-grey-darker text-base">
                                        {{ project.description }}
                                    </p>
                                </div>
                                <div class="px-6 py-4">
                            <span
                                class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2"
                                v-for="user in project.users">
                                {{ user.name }}
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    import Layout from '@/Shared/Layout'

    export default {
        layout: Layout,
        name: "Projects",
        props: [
            'hackathons'
        ]
    }
</script>

<style scoped>

</style>
