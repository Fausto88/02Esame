<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/x-icon" href="./img/logopaginaweb.png">
    <title>Progetto Photoshop</title>
    <style>
        #div1 {
            height: 15%;
        }

        section {
            padding-top: 44px;
        }

        section img {
            flex-wrap: wrap;
            margin-top: 100px;
            width: 240px;
        }

        .tutto {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: 10px;
        }

        .annamoasx,
        .annamoadx {
            align-content: center;
            flex-direction: row;
            display: flex;
            flex-wrap: wrap;
        }

        .annamoasx h2,
        .annamoadx h2 {
            padding-left: 25px;
            justify-content: center;
            align-content: center;
            text-align: center;
            font-size: 3rem;
        }

        .annamoadx {
            margin-left: 50px;
        }

        h2 {
            margin-left: 20px;
        }

        .image-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .image-wrapper::before,
        .image-wrapper::after {
            content: '';
            position: absolute;
            top: 100px;
            bottom: 0;
            width: 20px;
            background-color: rgb(40, 174, 40);
        }

        .image-wrapper::before {
            left: -20px;
        }

        .image-wrapper::after {
            right: -20px;
        }

        @media screen and (max-width: 1200px) {
            section img {
                width: 40%;
            }

            .tutto {
                width: 90%;
                display: flex;
                justify-content: center;
            }

            .annamoasx,
            .annamoadx {
                justify-content: center;
                align-content: center;
                flex-direction: column;
            }

            .annamoasx h2,
            .annamoadx h2 {
                justify-content: center;
                align-content: center;
                flex-direction: column;
                font-size: 1.4rem;
            }
        }

        @media screen and (max-width: 815px) {
            section img {
                padding-top: 40px;
                width: 30%;
            }

            .tutto {
                width: 100%;
                display: block;
                margin: 10px;
            }

            .annamoasx,
            .annamoadx {
                margin-left: 10px;
                align-content: center;
                flex-direction: column;
            }

            h2 {
                font-size: medium;
            }
        }
            @media screen and (max-width: 495px) {
                h2 {
                    font-size: small;
                }
        }
    </style>
</head>

<body>
    <?php
    require_once("header.php");
    stampaHeader();
    ?>
    <section>

        <div class="tutto">

            <div class="annamoasx">
                <div class="image-wrapper">
                    <img src="./img/BALLERINA2.png" alt="ballerina">
                </div>
                <h2>Immagine completa <br /> di una ballerina<br /> </h2>
            </div>
            <div class="annamoadx">
                <div class="image-wrapper">
                    <img src="./img/BALLERINA1.png" alt="ballerina con sfondo">
                </div>
                <h2>Estrazione della ballerina <br /> rimuovendo tutto lo sfondo</h2>
            </div>
        </div>

    </section>
</body>

</html>