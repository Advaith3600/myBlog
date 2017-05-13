<!DOCTYPE html>
<html>
    <head>
        <title>Public Chat</title>
        @include('partials._head')
        <meta name="username" content="{{ Auth::user()->name }}" />
    </head>
    <body style="min-height: 100vh; background: url(/images/8.jpg); background-size: 100% 100%; background-repeat: no-repeat;">
        @include('partials._navbar')
        <div id="app">
            <div class="view-users">
                <div class="text-center w3-text-white w3-margin-top">
                    <a href="#" class="close" v-on:click="hideUsers">&times;</a>
                    <h1>Users in Chat Room</h1>
                    <hr />
                    Number of users = @{{ usersInRoom.length }}
                    <div class="users" style="overflow: hidden;">
                        <div class="col-sm-3 w3-margin-bottom" v-for="userInRoom in usersInRoom" style="overflow: hidden;">
                            <div class="u-1">
                                <img :src="userInRoom.profile" width="50" height="50">
                            </div>
                            <div class="u-2">
                                @{{ userInRoom.name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2" style="margin-top: 80px;">
                <div class="panel panel-default w3-card-4">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="overflow: hidden; font-size: 30px!important;">
                            Public Chat
                            <span class="pull-right"><a href="#" class="btn btn-info" v-on:click="ViewUsers">View Users in Room</a></span>
                        </h3>
                    </div>
                    <div class="panel-body" style="height: 700px; overflow-y: scroll; background: url(images/9.jpg); background-repeat: no-repeat; background-size: auto 100%; background-position: center;">
                        <chat-log v-bind:messages="messages"></chat-log>
                    </div>
                    <div class="panel-footer">
                        <chat-composer v-on:messagesent="addMessage"></chat-composer>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
        $(document).ready(function() {
            $(".panel-body").animate({ scrollTop: $(".panel-body").height() }, 1000);
        });
</script>
    </body>
</html>
