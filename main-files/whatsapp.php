<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="whatsapp-icon" onclick="openWhatsAppChat()">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </div>

    <script>
        function openWhatsAppChat() {
            // Replace with your phone number in international format
            var phoneNumber = "918882870928";  // Example: 91 for India, followed by the number
            var message = "Hello, I'm interested in your services!";
            var url = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);
            window.open(url, "_blank");
       }
       </script>
</body>
</html>