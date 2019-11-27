<template>
    <div class="pt-24 text-black">
        <div
            class="container px-3 mx-auto">
            <div class="sm:flex md:flex">
                <div class="flex-1 text-gray-700 bg-gray-100 px-4 py-2 m-2 rounded">
                    <div class="w-full font-extrabold  text-gray-900 px-6 text-center py-3">Theme Based</div>
                    <div class="w-full text-sm font-weight-light text-gray-800 text-center py-3">A theme will be announced at the starting time.</div>
                    <div class="w-full text-sm font-weight-light text-gray-800 text-center py-3">
                        <i>Don't feel the theme?</i> <span class="text-bold">Make something else.</span>
                    </div>
                </div>
                <div class="flex-1 text-gray-700 bg-gray-100 px-4 py-2 m-2 rounded">
                    <div class="w-full font-extrabold text-gray-900 px-6 text-center py-3">Solo or Team</div>
                    <div class="w-full text-sm font-weight-light text-gray-800 text-center py-3">Work together in a Team or go Solo.</div>
                    <div class="w-full text-sm font-weight-light text-gray-800 text-center py-3">
                        All the work you produce is yours to keep. We just ask that you are available for press / questions if needed.
                    </div>
                </div>
                <div class="flex-1 text-gray-700 bg-gray-100 px-4 py-2 m-2 rounded">
                    <div class="w-full font-extrabold  text-gray-900 px-6 text-center py-3">Help where you can</div>
                    <div class="w-full text-sm font-weight-light text-gray-800 text-center py-3">
                        Not a developer / designer? Join our chat and see how you can help. There is always something you can do.
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'event'
        ]
    }
</script>

