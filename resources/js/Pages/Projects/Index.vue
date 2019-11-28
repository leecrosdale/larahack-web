<template>
    <div>
        <h1 class="text-3xl">Projects</h1>
        <div v-for="hackathon in hackathons">
            <h2 class="text-xl py-6">{{ hackathon.name }}</h2>
            <div class="flex flex-wrap">
                <div class="flex flex-wrap">
                    <div v-for="project in hackathon.projects">
                        <div class="flex-auto w-auto h-auto px-4 py-2 m-2">
                            <div class="max-w-xs rounded overflow-hidden border-2 my-2 py-3">
                                <img class="w-full h-64" :src="project.image" :alt="project.title + ' image'">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">{{ project.title }}</div>
                                    <p class="text-grey-darker text-base h-64">
                                        {{ project.description }}
                                    </p>
                                    <p class="justify-center align-content-center text-center text-medium">
                                        <a :href="project.url" target="_blank">View Project</a>
                                    </p>
                                </div>
                                <div class="px-6 py-1" v-for="user in project.users">
                            <span
                                class="flex flex-wrap bg-red-400 align-content-center text-center justify-center rounded-full px-3 py-1 text-sm font-semibold text-gray-800  mr-2">
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
