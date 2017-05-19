<template lang="html">
    <div class="chat-log w3-margin-top">
        <chat-message v-for="message in messages" :message="message" class="chat-message"></chat-message>
        <div v-show="messages.length === 0" class="text-center"><h2>Nothing here Yet!</h2></div>
    </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style lang="css">
    .chat-message {
        margin: 0;
        padding: 0 10px 10px;
        max-height: 80vh;
        overflow-x: hidden;
    }
    .panel-body::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
    }
    .panel-body::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }
    .panel-body::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #555;
    }
</style>
