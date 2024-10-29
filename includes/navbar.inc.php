<nav class="navbar">
    <div class="navbar-top navbar-card-cluster">
        <?php
        // data die later uit de database word gehaald
            $dataTop = [
                "top" => ["home", "me"],
                "middle" => ["programs", "games"]
            ];

        // data toepassen en de template invullen
            foreach ($dataTop as $key => $value) {
                for ($i = 0; $i < 2; $i++) {
                    // checken of het navbar item gelijk is aan de pagina.
                    //  en hem dan een achtergrond geven
                    if ($page == $value[$i]) {
                        echo "
                            <a href='index.php?page=$value[$i]'>
                                <div class='navbar-$key navbar-card active'>
                                    <img src='img/navbar/$value[$i].png' alt='$value[$i]'>
                                </div>
                            </a>
                        ";
                    } elseif ($page != $value[$i]) {
                        echo "
                            <a href='index.php?page=$value[$i]'>
                                <div class='navbar-$key navbar-card'>
                                    <img src='img/navbar/$value[$i].png' alt='$value[$i]'>
                                </div>
                            </a>
                        ";
                    }
                }
            }
        ?>
    <!-- elementen die niet in de tamplate paste -->
        <a href='index.php?page=contact'>
            <div class='navbar-bottom navbar-card'>
                <img src='img/navbar/contact.png' alt='contact'>
            </div>
        </a>
        
        <a href='https://github.com/TooHighDude420'>
            <div class='navbar-bottom navbar-card'>
                <img src='img/navbar/gitthub.png' alt='github'>
            </div>
        </a>
    </div>
</nav>