<template lang="html">
    <div class="chat-composer">
        <input type="text" placeholder="type to send..." class="form-control" v-model="messageText" @keyup.enter="sendMessage">
        <input type="submit" value="Send" class="btn btn-primary" @click="sendMessage">
    </div>
</template>

<script>
export default {
    data() {
        return {
            messageText: ''
        }
    },
    methods: {
        sendMessage() {
            this.$emit('messagesent', {
                message: this.messageText,
                user: {
                    name: $('meta[name=username]').attr("content")
                }
            });
            this.messageText = '';
        }
    }
}
</script>

<style lang="css">
    .chat-composer {
        display: flex;
    }
    .chat-composer input {
        border-radius: 0!important;
    }
</style>
