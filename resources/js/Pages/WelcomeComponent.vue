<template>
    <div>
        <welcome-hero-component :event="event"></welcome-hero-component>
        <welcome-about-component ></welcome-about-component>
        <sponsor-component :sponsors="sponsors"></sponsor-component>
        <stream-component :streams="streams"></stream-component>



    </div>
</template>

<script>
    import WelcomeHeroComponent from "../components/welcome/WelcomeHeroComponent";
    import WelcomeAboutComponent from "../components/welcome/WelcomeAboutComponent";
    import StreamComponent from "../components/StreamComponent";
    import SponsorComponent from "../components/SponsorComponent";
    export default {
        components: {SponsorComponent, StreamComponent, WelcomeAboutComponent, WelcomeHeroComponent},
        props: [
            'event',
            'streams',
            'sponsors'
        ]
    }
</script>
