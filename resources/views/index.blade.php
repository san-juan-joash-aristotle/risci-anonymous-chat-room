<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Alias</title>
    <link rel="stylesheet" href="./css/app.css" />
</head>
<body>
    <div class="app">
        <header>
            <h1>ALIAS</h1>
            <h3>A RISCI-based Anonymous Chat Room</h3>
            <br> </br>
            <input type="text" name="username" id="username" placeholder="Enter your Nickname here..." autocomplete="off" />
        </header>
        <div id="messages"></div>
        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Enter your Message here..." autocomplete="off" />
            <button type="submit" id="message_send" onClick="setTimeout(ClearMessage, delay);">Send</button>

            <script>
            function ClearMessage() {
            document.getElementById('message_input').value = '';
            }
            var delay = 15;
            setTimeout( ClearMessage, delay )
            </script>

    </div>

    <script src="./js/app.js"></script>

    <body text="#ffffff">

</body>
</html>
