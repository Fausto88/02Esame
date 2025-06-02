<?php
namespace MieClassi;
/*
* funzioni utili solo da richiamare
*/
class Utility
{
    /* Funzione per controllare se una stringa sta all'interno di range
    * @integer $stringa Stringa da controllare
    * @integer $min Lunghezza minima
    * @integer $max Lunghezza massima
    * @return boolean
    */
    public static function controllaRangeStringa($stringa, $min=null, $max=null)
    {
        $rit = 0;
        $n = strlen($stringa);
        if ($min != null && $n < $min) {
            $rit++;
        }
        if ($max != null && $n > $max) {
            $rit++;
        }
        return ($rit == 0);
    }

    /* Funzione per leggere un file
    * @string $file File da leggere
    * @return boolean|string
    */
    public static function leggiTesto($file) {
        $rit=false;
        if (!$fp = fopen($file, "r")) {
            echo "Non posso aprire il file $file<br>";
        } else {
            if (is_readable($file) === false) {
                echo "Il file $file non è leggibile<br>";
            } else {
                    $rit = fread($fp, filesize($file));
                }
            }
        fclose($fp);
        return $rit;
    }

    /* Funzione per leggere un file CSV
    * @string $file File da leggere
    * @return boolean|string
    */
    public static function leggiTestoCSV($file) {
        $rit=false;
        $riga=0;
        if (!$fp = fopen($file, "r")) {
            echo "Non posso aprire il file $file<br>";
        } else {
            if (is_readable($file) === false) {
                echo "Il file $file non è leggibile<br>";
            } else {
                while (($data=fgetcsv($fp,null,";")) !== false) {
                    $rit[$riga] = $data;
                    $riga++;
                }
            }
        }
        fclose($fp);
        return $rit;
    }

    /* Funzione per estrarre dal $_GET e $_POST
    * @string $key Chiave da estrarre
    * @return string
    */
    public static function extract($key)
    {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : '';
    }

    //-----------------------------------------------------------------
    /**
     * 
     * Funzione per estrarre dal $_POST o dal $_GET la proprietà richiesta
     * 
     * @param string Proprietà da ricercare
     * @return string|null
     * 
     */
    public static function richiestaHTTP($str)
    {
        $rit = null;
        if ($str !== null) {
            if (isset($_POST[$str])) {
                $rit = $_POST[$str];
            } elseif (isset($_GET[$str])) {
                $rit = $_GET[$str];
            }
        }
        return $rit;
    }


    /* Funzione per estrarre dal $_GET e $_POST e pulire la stringa
    * @string $key Chiave da estrarre
    * @return string
    */
    public static function extractClean($key)
    {
        return isset($_REQUEST[$key]) ? htmlspecialchars($_REQUEST[$key]) : '';
    }


    /* Funzione per scrivere del testo in un file
    * @param string $file Nome del file
    * @param string $stringa Testo da inserire
    * @param boolean $commenta Scrive a video se l'operazione è andata a buon fine
    * @return boolean
    */
    public static function scriviTesto($file, $stringa, $commenta = false)
    {
        $rit = false;
        if (!$fp = fopen($file, 'a')) {
            echo "Non posso aprire il file $file<br>";
        } else {
            if (is_writable($file) === false) {
                echo "Il file $file non è scrivibile<br>";
            } else {
                if (!fwrite($fp, $stringa)) {
                    echo "Non posso scrivere il file $file<br>";
                } else {
                    if ($commenta) echo "Operazione completata! Ho scritto $stringa nel file $file<br>";
                    $rit = true;
                }
            }
        }
        fclose($fp);
        return $rit;
    }
}

define("COMMENTA", true);
?>