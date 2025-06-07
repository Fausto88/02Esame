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