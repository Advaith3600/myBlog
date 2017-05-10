<template lang="html">
    <div style="width: 100%; overflow: hidden;">
        <div class="chat-message img-rounded w3-white w3-card-2 w3-margin-top">
            <div class="chat-message-user">
                <small>{{ message.user.name }}</small>
            </div>
            <p>{{ message.message }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'message'
    ]
}
</script>

<style lang="css">
    .chat-message {
        width: fit-content;
        display: block;
    }
    .chat-message-user {
        font-size: 12px;
        border-bottom: 1px solid grey;
        padding: 0 12px;
        width: 100%;
    }
    .chat-message p {
        padding: 5px 12px;
        margin: 0;
    }
</style>
