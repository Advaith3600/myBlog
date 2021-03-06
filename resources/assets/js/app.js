
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('chat-message', require('./components/Chat-Message.vue'));
Vue.component('chat-log', require('./components/Chat-Log.vue'));
Vue.component('chat-composer', require('./components/Chat-Composer.vue'));
Vue.component('chat-user', require('./components/Chat-User.vue'));
Vue.component('news', require('./components/News.vue'));

const app = new Vue({
    el: '#app',
    data: {
        messages: [],
        usersInRoom: []
    },
    methods: {
        addMessage(message) {
            this.messages.push(message);
            axios.post('/chat/messages', message);
        },
        ViewUsers(e) {
            e.preventDefault();
            $('.view-users').slideDown('slow');
        }
    },
    created() {
        const loggedIn = $('meta[name=loggedIn]').attr('content');
        if (loggedIn != 'undefined') {
            axios.get('/chat/messages').then(response => {
                this.messages = response.data;
            });

            Echo.join('chatroom')
                .here((users) => {
                    this.usersInRoom = users;
                })
                .joining((user) => {
                    this.usersInRoom.push(user);
                })
                .leaving((user) => {
                    this.usersInRoom = this.usersInRoom.filter(u => u!= user);
                })
                .listen('ChatPosted', (e) => {
                    this.messages.push({
                        message: e.chat.message,
                        user: e.user
                    });
                    $(".panel-body").animate({ scrollTop: $(".panel-body").height() }, 1000);
                });
        }
    }
});
