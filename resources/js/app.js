require('./bootstrap');

// Based on Eazy2Code’s real-time chat application with Laravel and Pusher (https://www.youtube.com/watch?v=vl5CJIhy5oU&t; retrieved on March 10, 2022)

const messages_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit', function (e) {
    e.preventDefault();

    let has_errors = false;

    if (username_input.value == "") {
        alert("Please enter a Nickname...");
        has_errors = true;
    }

    if (message_input.value == "") {
        alert("Please enter a Message");
        has_errors = true;
    }

    if (has_errors) {
        return;
    }

    const options = {
        method: 'post',
        url: '/send-message',
        data: {
            username: username_input.value,
            message: message_input.value
        }
    }

    axios(options);

})

window.Echo.channel('chat')
    .listen('.message', (e) => {
        messages_el.innerHTML += '<div class = "message"><strong>' + e.username + ':</strong> ' + e.message + '</div';
    })
