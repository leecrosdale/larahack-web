<template>
    <div>
        <welcome-hero-component :event="event"></welcome-hero-component>
        <welcome-about-component ></welcome-about-component>
        <stream-component :streams="streams"></stream-component>


    </div>
</template>

<script>
    import WelcomeHeroComponent from "../components/welcome/WelcomeHeroComponent";
    import WelcomeAboutComponent from "../components/welcome/WelcomeAboutComponent";
    import StreamComponent from "../components/welcome/StreamComponent";
    export default {
        components: {StreamComponent, WelcomeAboutComponent, WelcomeHeroComponent},
        props: [
            'event',
            'streams'
        ]
    }
</script>
