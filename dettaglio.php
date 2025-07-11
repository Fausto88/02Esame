<?php
require_once("utility.php");
use MieClassi\Utility as UTIL;

$file = "Imieilavori.json";
$links = json_decode(UTIL::leggiTesto($file), true);

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Cerca il lavoro selezionato filtrando per id
$lavoro = null;
foreach ($links as $item) {
    if (isset($item['id']) && $item['id'] == $id) {
        $lavoro = $item;
        break;
    }
}
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

<body>
<?php
require_once("header.php");
stampaHeader();
?>
<main>
<?php if ($lavoro):
    echo '<div class="img-extra">';
    ?>
    <h1><?php echo htmlspecialchars($lavoro['title']); ?></h1>
    <p><?php echo htmlspecialchars($lavoro['desc']); ?></p>
    <?php
    // Mostra tutte le immagini di 'lavo'
    if (!empty($lavoro['lavo'])) {
        
        foreach ($lavoro['lavo'] as $img) {
            echo '<img class="balla" src="' . htmlspecialchars($img) . '" alt="immagine dettaglio">';
        }
        echo '</div>';
    }
    ?>
<?php else: ?>
    <p>Lavoro non trovato.</p>
<?php endif; ?>
<a class="bottonee4" href="index.php#progetti" title="Torna ai progetti">Torna ai progetti</a>
</main>
</body>
</html>