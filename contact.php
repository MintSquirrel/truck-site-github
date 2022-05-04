<?php

?>

<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <style>
      .img{
        display: block;
        margin: auto;
      }
      .contact{
            color: #FFFFFF;
            font-family: calibri;
            border: 10px grey;
            font-size: 75px;
            text-align: center;
            background: #7399D5;
        }
    </style>
    <body>
        <div class="contact">
            Contact us
        </div>
        <section>
        <img src="img/contactusimage.jpeg" alt="image with truck drivers" />
        </section>
        <div class="background">
        <div class="container">
            <div class="screen">
            <div class="screen-header">
                <div class="screen-header-left">
                <div class="screen-header-button close"></div>
                <div class="screen-header-button maximize"></div>
                <div class="screen-header-button minimize"></div>
                </div>
                <div class="screen-header-right">
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                <div class="screen-header-ellipsis"></div>
                </div>
            </div>
            <div class="screen-body">
                <div class="screen-body-item left">
                <div class="app-title">
                    <span>CONTACT</span>
                    <span>US</span>
                </div>
                <div class="app-contact">CONTACT INFO :</div>
                </div>
                <div class="screen-body-item">
                <div class="app-form">
                    <div class="app-form-group">
                    <input
                        class="app-form-control"
                        placeholder="NAME"
                        value="Enter your Name"
                    />
                    </div>
                    <div class="app-form-group">
                    <input class="app-form-control" placeholder="EMAIL" />
                    </div>
                    <div class="app-form-group">
                    <input class="app-form-control" placeholder="CONTACT NO" />
                    </div>
                    <div class="app-form-group message">
                    <input class="app-form-control" placeholder="MESSAGE" />
                    </div>
                    <div class="app-form-group buttons">
                    <button class="app-form-button">CANCEL</button>
                    <button class="app-form-button">SEND</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="credits">
            inspired by
            <a
                class="credits-link"
                href="https://dribbble.com/shots/2666271-Contact"
                target="_blank"
            >
                <svg class="dribbble" viewBox="0 0 200 200">
                <g stroke="#ffffff" fill="none">
                    <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
                    <path
                    d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345"
                    stroke-width="20"
                    ></path>
                    <path
                    d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951"
                    stroke-width="20"
                    ></path>
                    <path
                    d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103"
                    stroke-width="20"
                    ></path>
                </g>
                </svg>
            </a>
            </div>
        </div>
        </div>
    </body>

    <?php include('templates/footer.php'); ?>
</html>