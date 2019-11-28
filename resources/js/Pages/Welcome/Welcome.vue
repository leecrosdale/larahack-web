<template>

    <div>
        <welcome-hero-component :hackathon="hackathon"></welcome-hero-component>
        <welcome-about-component ></welcome-about-component>
        <sponsor-component :sponsors="sponsors"></sponsor-component>
        <stream-component :streams="streams"></stream-component>
    </div>

</template>

<script>
    import WelcomeHeroComponent from "@/Shared/Welcome/WelcomeHeroComponent";
    import WelcomeAboutComponent from "@/Shared/Welcome/WelcomeAboutComponent";
    import StreamComponent from "@/Shared/StreamComponent";
    import SponsorComponent from "@/Shared/SponsorComponent";
    import Layout from '@/Shared/Layout'
    export default {
        layout: Layout,
        components: {SponsorComponent, StreamComponent, WelcomeAboutComponent, WelcomeHeroComponent},
        props: [
            'hackathon',
            'streams',
            'sponsors'
        ]
    }
</script>
