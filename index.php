<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <div>
        <div id="messageStatus"></div>
        <form onsubmit="savecontact(event)">
            <input type="text" name="name" id="nama" placeholder="insert name here">
            <br>
            <input type="text" name="email" id="email" placeholder="insert email here">
            <br>
            <textarea name="message" id="message" placeholder="insert message here"></textarea>
            <br>
            <button>Submit Message</button>
        </form>
    </div>
    <ul id="list">
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function savecontact(e) {
            e.preventDefault()
            axios.post('save-contact.php', {
                'nama': nama.value,
                'email': email.value,
                'message': message.value
            }).then(function(response) {
                list.innerHTML = "<li>" + response.data[0]['nama']+ "</li>"
            })
        }
    </script>
</body>
</html>