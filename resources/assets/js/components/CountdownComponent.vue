<template>
        <h1><Countdown deadline="03 Feb 2018 08:00:00 GMT"></Countdown>

                @{{ date }}
        </h1>
</template>

<script>
import Countdown from 'vuejs-countdown'

    export default {
        components: { Countdown }
    }

</script>
