<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/x-icon" href="logopaginaweb.png">
    <title>Progetto Visual studio,html,css</title>
    <style>
        video {
            float: left;
            width: 85%;
        }

        .insieme {
            padding-top: 120px;
            margin: 10px;
            display: flex;
        }

        .mettiasx,
        .mettiadx {
            align-content: center;

            flex-direction: row;
        }

        @media screen and (max-width: 1200px) {
            .mettiadx {
                font-size: medium;
            }
        }

        @media screen and (max-width: 815px) {
            .mettiadx {
                font-size: small;
            }
        }

        @media screen and (max-width: 450px) {
            .insieme {
                width: 100%;
                padding-top: 200px;
                flex-direction: column;
            }

            .mettiadx {
                margin-top: 10px;
                font-size: 0.6em;
            }
        }
    </style>
</head>

<body>
    <?php
    require_once("header.php");
    stampaHeader();
    ?>
    <div class="insieme">
        <div class="mettiasx">
            <video src="lavorovisualstudio.mp4" autoplay muted preload="auto" loop></video>
        </div>
        <div class="mettiadx">
            <h2>Lavoro eseguito su Visual studio code con HTML e CSS</h2>
        </div>
    </div>
</body>

</html>