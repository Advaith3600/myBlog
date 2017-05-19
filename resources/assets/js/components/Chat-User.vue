<template lang="html">
    <div class="chat-user">
        <a href="#" class="close" v-on:click="hideUsers">&times;</a>
        <h1>Users in Chat Room</h1>
        <hr />
        Number of users = {{ usersInRoom.length }}
        <div class="users" style="overflow: hidden;">
            <div class="col-sm-3 w3-margin-bottom" v-for="userInRoom in usersInRoom" style="overflow: hidden;">
                <div class="u-1">
                    <img :src="userInRoom.profile" width="50" height="50">
                </div>
                <div class="u-2">
                    {{ userInRoom.name }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['usersInRoom'],
    methods: {
        hideUsers(e) {
            e.preventDefault();
            $('.view-users').slideUp('slow');
        }
    }
}
</script>

<style lang="css">
</style>
