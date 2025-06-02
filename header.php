<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="./img/logopaginaweb.png">
    <title>menù responsive</title>
    
</head>
<body>
<?php
function stampaHeader() {
    ?>
<header>
    <nav id="div1" class="div1">
        <a href="#div1" class="aperto"> 
            <span></span>
         </a>
        <a href="#main" class="chiuso"> 
            <span></span>
         </a>
        
            <a class="logo" href="index.php" title="Home"><img src="./img/logoesame1.png" alt="Logo"></a>
       
        
            <ul class="button-container">
                <li>
                    <a class="voci" href="index.php#progetti" title="">Progetti</a>
                    <a class="voci" href="index.php#contatti1" title="">Contatti</a>
                    <a class="voci" id="scrivi" href="index.php#scrivimi" title="" >Scrivimi</a>
                </li>
            </ul>
       
    </nav>
    </header>
    <?php
}
?>
    </body>