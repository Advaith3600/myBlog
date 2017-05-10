<template lang="html">
    <div class="chat-log">
        <chat-message v-for="message in messages" :message="message"></chat-message>
        <div v-show="messages.length === 0" class="text-center"><h2>Nothing here Yet!</h2></div>
    </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style lang="css">
</style>
