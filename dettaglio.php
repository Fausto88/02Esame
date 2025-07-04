<?php
require_once("utility.php");
use MieClassi\Utility as UTIL;

$file = "Imieilavori.json";
$links = json_decode(UTIL::leggiTesto($file), true);

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

for ($i = 0; $i < count($links); $i++) {
    if ($id == 1) {
        
        ?>
    <!DOCTYPE html>
    <html lang="it">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="./img/logopaginaweb.png">
    <title>Dettaglio lavori</title>
    </head>
        <div class="balla">
            <img src="./img/BALLERINA2.png" alt="ballerina">
            <h4> Ballerina con sfondo </h4>
            <br>
            
            <img src="./img/BALLERINA1.png" alt="ballerina senza sfondo">
            
            <h4> Ballerina ritagliata con cura <br> eliminando lo sfondo </h4>
        </div>
        <br>
        <a class="bottonee4" href="index.php#progetti" title="Torna ai progetti"> Torna ai progetti</a>
        <?php
        break;
    }
    if ($id == 2) {
        
       ?>
    <!DOCTYPE html>
    <html lang="it">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="./img/logopaginaweb.png">
    <title>Dettaglio lavori</title>
 
    </head>
        <br>
        <video src="lavorovisualstudio.mp4" autoplay muted preload="auto" loop height="40%"></video>
        <br><br>
        <h4> Lavoro di Visual Studio Code </h4>
        <br>
        <a class="bottonee4" href="index.php#progetti" title="Torna ai progetti"> Torna ai progetti</a>

        <?php
        break;
    }
    if ($id == 3) {
        ?>
    <!DOCTYPE html>
    <html lang="it">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="./img/logopaginaweb.png">
    <title>Dettaglio lavori</title>
    
    </head>
        <video src="lavorovisualstudio.mp4" autoplay muted preload="auto" loop height="40%"></video>
        <br><br>
        <h4> Lavoro di Visual Studio Code </h4>
        <br>
        <a class="bottonee4" href="index.php#progetti" title="Torna ai progetti"> Torna ai progetti</a>
      
        <?php
        break;
    }
    if ($id == 4) {
        ?>
    <!DOCTYPE html>
    <html lang="it">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="./img/logopaginaweb.png">
    <title>Dettaglio lavori</title>
    </head>
        <video src="lavorovisualstudio.mp4" autoplay muted preload="auto" loop height="40%"></video>
        <br><br>
        <h4> Lavoro di Visual Studio Code </h4>
        <br>
        <a class="bottonee4" href="index.php#progetti" title="Torna ai progetti"> Torna ai progetti</a>

        <?php
        break;
    }
}
?>

