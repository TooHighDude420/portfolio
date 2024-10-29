<?php
    $data = array(
        array("home", "me"),
        array("programs", "games"),
        array("contact", "github")
    );
    echo "<div class='top-".$data[0][0]." navbar-card'><img src='img/navbar/" .$data[0][0]. ".png' alt='". $data[0][0]."'</div>";       
?>