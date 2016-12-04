<template>
    <div>
        <br />
        <p>Você está logado como: <strong>{{ username }}</strong> </p>

        <hr>

        <h2>Escreva sua mensagem</h2>
        <input type="text" class="form-control" placeholder="mensagem" required="required" v-model="newMsg" @keyup.enter="press">

        <hr>
        <h3>Mensagens</h3>

        <ul v-for="message in messages">
            <b>{{ message.username }} disse:</b> {{ message.message }}</li>
        </ul>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: [],
                newMsg: '',
                username: user
            }
    },

    mounted: function () {
        let messages = this.messages;

        // Obtém novas mensagems
        echo.channel('chat').listen('ChatMessage', function (data) {
            messages.push({
                message: data.message.message,
                username: data.message.user
            });
        });
    },

    methods: {

        press() {
            this.$http.post('/message', {message: this.newMsg})
                    .then((response) => {
                this.newMsg = '';
            });
        }
    }
}
</script>
