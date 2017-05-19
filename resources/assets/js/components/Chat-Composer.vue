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
            if (this.messageText != '') {
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: {
                        name: $('meta[name=username]').attr("content")
                    }
                });
                $(".panel-body").animate({ scrollTop: $(".panel-body").height() }, 1000);
                this.messageText = '';
            }
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
