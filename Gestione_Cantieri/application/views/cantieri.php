<?php require 'application/views/templates/header.php';?>
<h1>Parametri di ricerca</h1>

<form method="post" action="<?php echo URL; ?>Cantiere/search">
    <label for="address">Indirizzo</label>
    <input type="text" name="address" placeholder="Inserire un indirizzo...">
    <br><br>
    <label for="n">Lavoratori</label>
    <input type="number" name="n" min="1" max="200" placeholder="10">
    <br><br>
    <p style="margin-bottom: 5px">Visuale:</p>
    <label for="view1">Visibile</label>
    <input type="radio" id="view1" name="view"><br>
    <label for="view2">Invisibile</label>
    <input type="radio" id="view2" name="view">
    <br><br>
    <label for="rating">Valutazione</label>
    <input type="range" name="rating" min="0" max="5">
    <br><br>
    <input type="submit" value="Ricerca">
</form>

<br><br>

<h1>Cantieri</h1>
<form method="get">
    <?php if (!empty($worksites)) {
            foreach ($worksites as $worksite) {
                echo '<div class="worksite" onclick="Details('.$worksite['id'].')"><h4>Indirizzo: '.$worksite['via'].', ';
                echo $worksite['cap'].', ';
                echo $worksite['paese'].'</h4>';
                echo '<p>Tipologia: '.$worksite['tipologia'].'</p>';
                echo '<p>Numero di lavoratori: '.$worksite['n_operai'].'</p>';
                echo '<p>Inizato: '.$worksite['data_inizio'].'</p>';
                if (!empty($worksite['data_fine'])) {
                    echo '<p>Data di completamento: '.$worksite['data_fine'].'</p>';
                }
                else {
                    echo '<p>In corso</p>';
                }
                echo  '<p>Valutazione: '.$worksite['valutazione'].'</p>';
                if (!empty($worksite['foto'])) {
                    $pics = explode(",", $worksite['foto']);

                    foreach ($pics as $foto) {
                        echo '<img src="'.URL.'public/pictures/'.$foto.'">';
                    }
                }
                else {
                    echo '<p><i>Nessuna immagine disponibile</i></p>';
                }
                echo '</div><br><br>';
            }
        }
    ?>
</form>

<script>
    function Details(id) {
        window.location.replace("<?php echo URL ?>Cantiere/showDetails/" + id);
    }

    // Later
    function SwitchImage(id) {
        let worksite = document.getElementById(id);
        worksite.src = "";
    }
</script>

<?php  require 'application/views/templates/footer.php';?>

