<template>
    <div class="pt-24 text-black">
        <div
            class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row justify-center align-content-center items-center">
            <div class="flex flex-col w-full text-center" v-if="hackathon && hackathon.status === 'running'">
                <p class="uppercase tracking-loose w-full">{{ hackathon.name }}</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">Theme: {{ hackathon.theme }}</h1>
                <p class="leading-normal text-2xl mb-8">Join other LaraHackers now!</p>
                <div class="w-full">
                    <a href="/register">
                        <button
                            class="hover:underline bg-black text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg align">
                            Join the Hackathon
                        </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col w-full text-center" v-else-if="hackathon && hackathon.status === 'starting'">
                <p class="uppercase tracking-loose w-full">{{ hackathon.name }}</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">Theme announced at start of event!</h1>
                <p class="leading-normal text-2xl mb-8">Join other LaraHackers now!</p>
                <div class="w-full">
                    <a href="/register">
                    <button
                        class="hover:underline bg-black text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg align">
                        Join the Hackathon
                    </button>
                    </a>
                </div>
            </div>

            <div class="flex flex-col w-full text-center" v-else-if="hackathon && hackathon.status === 'voting'">
                <p class="uppercase tracking-loose w-full">{{ hackathon.name }}</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">Theme: {{ hackathon.theme }}</h1>
                <p class="leading-normal text-2xl mb-8">Voting now in progress</p>
            </div>

            <div class="flex flex-col w-full text-center" v-else-if="hackathon && hackathon.status === 'voting-ended'">
                <p class="uppercase tracking-loose w-full">{{ hackathon.name }}</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">{{ hackathon.theme }}</h1>
                <p class="leading-normal text-2xl mb-8">Voting Ended</p>

                Results here
            </div>

            <div class="flex flex-col w-full text-center" v-else>
                <h1 class="my-4 text-5xl font-bold leading-tight">Next LaraHack is being planned!</h1>
                <p class="leading-normal text-2xl mb-8">Check back soon</p>
                <div class="w-full">
                    <a href="/register">
                        <button
                            class="hover:underline bg-black text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg align">
                            Join and get notified!
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'hackathon'
        ]
    }
</script>

