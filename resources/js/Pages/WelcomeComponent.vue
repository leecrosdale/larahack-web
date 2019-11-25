<template>
    <div>
        <welcome-hero-component :event="event"></welcome-hero-component>

        

    </div>
</template>

<script>
    import WelcomeHeroComponent from "../components/welcome/WelcomeHeroComponent";
    export default {
        components: {WelcomeHeroComponent},
        props: [
            'event'
        ]
    }
</script>
