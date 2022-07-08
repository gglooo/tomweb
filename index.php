<?php
  require_once 'php/main.php';
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Tomáš Karásek – ocelové konstrukce</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./css/carousel.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="navbar">
            <nav>
                <div class="logo">
                    <a href="index.php">Ing. Tomáš Karásek</a>
                </div>  
                <ul class="nav-links">
                    <li><a href="#models">Album ocelových konstrukcí</a></li>
                    <li><a href="#">O mně</a></li>
                </ul>

                <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </nav>
        </div>
        <div class="my_text">
            <h1>
                Ocelové<br>konstrukce
            </h1>
            <h3>
                Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.
                Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                consec tetuer adipiscing.
            </h3>
            <div class="contact_container">
                <div class="contact">
                    <h2 class="contact_header">Kontakt</h2>
                    <div class="contact_item" id="phone">
                        <img src="./img/icons/phone.png" height="40" width="40" alt="Telefon" title="Telefonní číslo">
                        <p class="info" title="Telefonní číslo">+420 605 574 550</p>
                    </div>
                    <div class="contact_item" id="email">
                        <img src="./img/icons/email.png" height="40" width="40" alt="Email" title="Email">
                        <p class="info" title="Email">tomas.karasek@atlas.cz</p>
                    </div>
                    <div class="contact_item" id="bank_account">
                        <img src="./img/icons/wallet.png" height="40" width="40" alt="Číslo účtu" title="Číslo účtu">
                        <p class="info" title="Číslo účtu">86-5774990207/0100</p>
                    </div>
                    <div class="contact_item" id="bank_account" title="IČO">
                        <p class="header">IČO</p>
                        <p class="info" title="IČO">732 32 351</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel_container">
            <div id="my_carousel" class="carousel slide" data-bs-ride="carousel">
                <?php populate_carousel(); ?>
                <button class="carousel-control-prev" type="button" data-bs-target="#my_carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#my_carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
            </div>
        </div>


        <!-- Album of models -->
        <div class="background" id="models">
            <div class="model_container">
                <h1 class="model_header">Album ocelových konstrukcí</h1>
                <?php populate_models(); ?>
                <div class="model_item" style="grid-row: 3; grid-column: 1;">
                    <img src="./models/2018/kareta/Kareta_1.jpg" alt="Model 1">
                    <div class="model_info">
                        <h2>Kareta</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="model_item" style="grid-row: 3; grid-column: 2;">
                    <img src="./models/2018/kareta/Kareta_1.jpg" alt="Model 1">
                    <div class="model_info">
                        <h2>Kareta</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="model_item" style="grid-row: 3; grid-column: 3;">
                    <img src="./models/2018/kareta/Kareta_1.jpg" alt="Model 1">
                    <div class="model_info">
                        <h2>Kareta</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="model_item" style="grid-row: 4; grid-column: 1;">
                    <img src="./models/2018/kareta/Kareta_1.jpg" alt="Model 1">
                    <div class="model_info">
                        <h2>Kareta</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="model_item" style="grid-row: 4; grid-column: 2;">
                    <img src="./models/2018/kareta/Kareta_1.jpg" alt="Model 1">
                    <div class="model_info">
                        <h2>Kareta</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="model_item" style="grid-row: 4; grid-column: 3;">
                    <img src="./models/2018/kareta/Kareta_1.jpg" alt="Model 1">
                    <div class="model_info">
                        <h2>Kareta</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="model_item" style="grid-row: 5; grid-column: 1;">
                    <img src="./models/2018/kareta/Kareta_1.jpg" alt="Model 1">
                    <div class="model_info">
                        <h2>Kareta</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi scelerisque luctus velit. Lorem ipsum dolor sit amet, 
                            consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
        </div>

        <script src="js/navbar.js"></script>
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>