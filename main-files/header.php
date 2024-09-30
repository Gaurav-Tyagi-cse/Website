<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROTINOX PROFESSIONAL</title>
</head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link type="icon" href="Images/logo3.jpg">
<body>

     <!----------------------------------Header Area Start-----------------------------> 
    <header>
    
         <!-----------------------------Most Upper Area-----------------------------> 
        <div class="information">
            <div class="menu1"><p><i class="fa-solid fa-phone"></i> (+91) 8882800000 </p>
            </div>
            <div class="menu">
                <a class="line" href="#"><i class="fa-solid fa-envelope"></i> rsanything@gmail.com</a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
        <!-----------------------------Most Upper Area End-----------------------------> 
        <nav>
            <div class="logo-baar">
                <a href="#"><img src="Images/Logo2.jpg" width="70px" alt="Logo"></a>
            <div id="click"><i class="fa-solid fa-bars"></i></div>
            </div>
            <div class="nav-list">
                <a class="icon" href="index.php">HOME</a>
                <a class="icon" href="about.php">ABOUT</a>
                <a class="icon" href="product.php">PRODUCTS</a>
                <a class="icon" href="#">MEDIA</a>
                <a class="icon" href="contact.php">CONTACT</a>
            </div>
        </nav>    
    </header>
    <!-- <script srcf="main-files/app.js"></script> -->
<script >
    const nav = document.querySelector(".nav-list")
const hamburgar = document.querySelector("#click")
hamburgar.addEventListener('click', () => {
    nav.classList.toggle('active')
    let data = hamburgar.querySelector('i')
    data.classList.toggle("fa-remove")

})



</script>
</body>
</html>