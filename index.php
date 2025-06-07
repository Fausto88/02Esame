<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleEsame2.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="./img/logopaginaweb.png">
    <title>Home Page</title>
        
</head>
<body>
<?php
require_once("header.php");
stampaHeader();
?>
<main>
    <div class="div3">
        <img src="./img/fototesseraTonda.png" alt="foto">
        <p class="scritta">Fausto, <br/> Web developer <br/> Per il tuo sito web <br/> su misura <br/> </p>
    </div>

    <div id="progetti">
            <h2 class="hide">I miei lavori <br/>I miei lavori<br/>I miei lavori<br/>I miei lavori<br/>I miei lavori </h2>
            <h2>I miei lavori:<br/></h2>
            <h1>Ecco alcuni dei miei progetti</h1>
            <br/>
            
<div class="iconelavori">
    
    <?php
    ini_set("auto_detect_line_endings", true);
    require_once("utility.php");
    use MieClassi\Utility as UTI;

    $file = "Imieilavori.json";
    $arr = json_decode(UTI::leggiTesto($file));
    ?>
    
    
    <div class="iconelavori1">
        <?php
        // Mappa pagina -> link, immagine, alt, descrizione
        $links = json_decode(UTI::leggiTesto($file), true);


        // Mostra tutte le icone come nel codice commentato
        foreach ($links as $info) {
            $id = ($info['title'] === 'CSS3') ? ' id="scrivimi"' : '';
            echo "<a href=\"{$info['href']}\"><img src=\"{$info['img']}\" alt=\"{$info['alt']}\" title=\"{$info['alt']}\"><p$id class=\"desc\">{$info['desc']}</p></a>";
        }
        ?>
    </div>
    <br/> 
          
    <h2 class="hide">I miei lavori <br/></h2>
    <hr >
    <div class="div4">
    <section class="sx">
        <h1>Per avere maggiori informazioni compila il form.<br/> </h1>
        

    </section>
    <?php
ini_set("auto_detect_line_endings", true);
require_once("utility.php");
use MieClassi\Utility as UT;

$inviato = UT::richiestaHTTP("inviato");
$inviato = ($inviato == null || $inviato != 1) ? false : true;


if ($inviato) {
    $valido = 0;
    // Recupero i dati
    $nome = UT::richiestaHTTP("nome");
    $cognome = UT::richiestaHTTP("cognome");
    $email = UT::richiestaHTTP("email");
    $telefono = UT::richiestaHTTP("telefono");
    $testo = UT::richiestaHTTP("testo");

    $clsErrore = 'class="errore"';

    // Controllo i dati
    if (($nome!="") && (strlen($nome) <= 25)) {
        $clsErroreNome = "";
    } else {
        $valido++;
        $clsErroreNome = $clsErrore;
        $nome = "";
    }
    if (($cognome!="") && UT::controllaRangeStringa($cognome, 1, 25)) {
        $clsErroreCognome = "";
    } else {
        $valido++;
        $clsErroreCognome = $clsErrore;
        $cognome = "";
    }
    if (($email!="") && UT::controllaRangeStringa($email, 10, 40) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $clsErroreEmail = "";
    } else {
        $valido++;
        $clsErroreEmail = $clsErrore;
        $email = "";
    }
    if (($telefono!="") && UT::controllaRangeStringa($telefono, 5, 20)) {
        $clsErroreTelefono = "";
    } else {
        $valido++;
        $clsErroreTelefono = $clsErrore;
        $telefono = "";
    }
  
    if (($testo!="") && UT::controllaRangeStringa($testo, 5, 500)) {
        $clsErroreTesto = "";
    } else {
        $valido++;
        $clsErroreTesto = $clsErrore;
        $testo = "";
    }
    $inviato = ($valido == 0) ? true : false;
}
else {
    $nome = "";
    $cognome = "";
    $email = "";
    $telefono = "";
    $testo = "";

    $clsErroreNome = "";
    $clsErroreCognome = "";
    $clsErroreEmail = "";
    $clsErroreTelefono = "";
    $clsErroreTesto = "";
}
if (!$inviato)
{
?>
<section class="dx">
    <form action="index.php?inviato=1"  method="POST" novalidate>
        <fieldset>
            <legend>Contattaci</legend>
            <label for="nome"<?php echo $clsErroreNome; ?>>Nome <span>*</span><br/></label>
            <input type="text" id="nome" name="nome" placeholder="Nome" required maxlength="25" value="<?php echo $nome; ?>" />
            <br/>
            <label for="cognome"<?php echo $clsErroreCognome; ?>>Cognome <span>*</span><br/></label>
            <input type="text" id="cognome" name="cognome" placeholder="Cognome" required maxlength="25" value="<?php echo $cognome; ?>" />
            <br/>
            <label for="email"<?php echo $clsErroreEmail; ?>>E-mail <span>*</span><br/></label>
            <input type="email" id="email" name="email" placeholder="E-mail" required minlength="10" maxlength="40" value="<?php echo $email; ?>" />
            <br/>
            <label for="tel"<?php echo $clsErroreTelefono; ?>>Telefono <br/></label>
            <input type="tel" id="tel" name="telefono" placeholder="Telefono" maxlength="20" minlength="5" value="<?php echo $telefono; ?>" />
            <br/>
            
            <label for="testo"<?php echo $clsErroreTesto; ?>>Testo <span>*</span><br/></label>
            <textarea id="testo" name="testo" placeholder="Testo" required maxlength="500" minlength="5"  ><?php echo $testo;?></textarea>

            <button type="submit" name="inviato" value="1">Contattaci</button>
        </fieldset>
    </form>
<?php 
}else {
    // Se sono qui, significa che ho ricevuto i dati e sono validi
    // Quindi posso procedere a scrivere il file di testo
    $str = 
    "<br><strong>Nome</strong>: %s<br>
    <strong>Cognome</strong>: %s<br>
    <strong>E-mail</strong>: %s<br>
    <strong>Telefono</strong>: %s<br>
    <strong>Testo</strong>: %s";
    $str = sprintf($str, $nome, $cognome, $email, $telefono, $testo);
    echo "<h1> Richiesta inviata </h1><br> Ecco il riepilogo della tua richiesta:<br>";
    echo $str;

    $str= str_replace("<br>", chr(13), $str);
    $file = "richiesteDiContatto.txt";

    $str= str_repeat("-", 50).chr(13).$str.chr(13) . str_repeat("-", 50).chr(13);
    $rit= UT::scriviTesto($file, $str);

    if($rit)
    {
        echo "<br>". str_repeat("-", 50).chr(13). "Richiesta salvata correttamente";
    }
    else
    {
        echo "<br>".str_repeat("-", 50).chr(13)."Errore nel salvataggio della richiesta";
    }
} 
?>
</section>
</div>
</main>
    <footer id="contatti1">
        <section>
            <ul class="rigaFooter">
                <li class="colonnaFooter">
                 <img src="./img/logoesame1.png" alt="" width="100">
                 <p>Web developer</p>
                </li>

                <li class="colonnaFooter">
                    <p>Vienici a trovare in:</p>
                    <address>Porta Palazzo, 1 <br/> 10100 Torino (To) <br/> Italia</address>
                </li>
        
                <li class="colonnaFooter">
                    <p>Contattaci:</p>
                    <address>
                    <ul>
                        <li>
                        <a href="mailto:faustolumare33@gmail.com" title="Scrivici una e-mail">faustolumare33@gmail.com</a>
                        </li>
                        <li>
                        <a href="tel:+393333213213" title="Telefonaci">+39 333.3213213</a>
                        </li>
                    </ul>
                    </address>
                </li>
        
               
            </ul>
        </section>
        <section>
            <ul class="privacy">
                <li>
                    <a href="#" title="Leggi la cookies policy">Cookies Policy</a>
                </li>
                <li>
                    <a href="#" title="Leggi la privacy policy">Privacy Policy</a>
                </li>
            </ul>
        </section>
    </footer>
    
              
    
</body>
</html>
