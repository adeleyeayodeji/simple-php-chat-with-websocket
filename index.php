<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Web Socket</title>
    </head>

    <body>
        <div>
            <button onclick="sendMessage()">Send Message</button>
        </div>
        <script>
        var conn = new WebSocket('ws://localhost:8080');
        conn.onopen = function(e) {
            console.log("Connection established!");
        };
        //check if connection error
        conn.onerror = function(e) {
            console.log("Connection error!");
        };

        conn.onmessage = function(e) {
            console.log(e.data);
        };

        function sendMessage() {
            conn.send('Hello World!');
            console.log('Message sent!');
        }
        </script>
    </body>

</html>