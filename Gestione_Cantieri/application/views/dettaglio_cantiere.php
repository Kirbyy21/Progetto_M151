<?php require 'application/views/templates/header.php';?>
<h1>Dettaglio Cantiere</h1>
<?php
    echo "<div class='details'>";
    echo "<p><b>Via: </b>".$worksite['via']."</p>";
    echo "<p><b>Codice postale: </b>".$worksite['cap']."</p>";
    echo "<p><b>Paese: </b>".$worksite['paese']."</p>";
    echo "<p><b>Visuale: </b>".$worksite['tipologia']."</p>";
    echo "<p><b>Numero di operai: </b>".$worksite['n_operai']."</p>";
    echo "<p><b>Inizio lavori: </b>".$worksite['data_inizio']."</p>";
    if (!empty($worksite['data_fine'])) {
        echo '<p><b>Fine lavori: </b>'.$worksite['data_fine'].'</p>';
    }
    else {
        echo '<p><b>Fine lavori: </b>Lavori ancora in corso</p>';
    }
    echo "<p><b>Valutazione: </b>".$worksite['valutazione']."</p>";
    if (!empty($worksite['foto'])) {
        $pics = explode(",", $worksite['foto']);

        foreach ($pics as $foto) {
            echo '<img src="'.URL.'public/pictures/'.$foto.'">';
        }
    }
    else {
        echo '<p><i>Nessuna immagine disponibile</i></p>';
    }
    echo "</div>";
?>

<?php  require 'application/views/templates/footer.php';?>