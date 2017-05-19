<template lang="html">
    <div style="width: 100%; overflow: hidden;">
        <div class="chat-message-2 w3-card" v-if="message.user.name === currentUser">
            <div class="chat-message-user">
                <small>{{ message.user.name }}</small>
            </div>
            <p>{{ message.message }}</p>
        </div>
        <div class="chat-message-1 w3-card" v-else>
            <div class="chat-message-user">
                <small>{{ message.user.name }}</small>
            </div>
            <p>{{ message.message }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: ['message'],
    data() {
        return {
            currentUser: $('meta[name=username]').attr("content")
        }
    }
}
</script>

<style lang="css">
    .chat-message-1 {
        padding-left: 0;
        margin-left: 0;
        margin-right: 150px;
        background: white;
        border-radius: 4px;
        padding: 5px 8px;
    }
    .chat-message-2 {
        padding-left: 0;
        margin-left: 150px;
        margin-right: 0;
        background: white;
        border-radius: 4px;
        padding: 5px 8px;
        text-align: right;
    }
    .chat-message-user {
        border-bottom: 1px solid grey;
    }
</style>
