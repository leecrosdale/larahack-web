<template>
        <h1><Countdown :deadline="deadline"></Countdown></h1>
</template>

<script>
import Countdown from 'vuejs-countdown'

    export default {
        components: { Countdown },
        props: ['deadline']
    }

</script>
