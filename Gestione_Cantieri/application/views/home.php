<?php require 'application/views/templates/header.php';?>
<style>
    body {
        background-image: url('<?php echo URL; ?>public/pictures/Betonieren-Home-2.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.3);
        background-blend-mode: darken;

        color: #fff;
    }
</style>

<h1>Benvenuto su Cantieri Svizzera</h1>

<p>
Scopri i cantieri più interessanti presenti in Svizzera.
</p>

<a href="<?php echo URL ?>Cantiere/show">Vedi tutti i cantieri</a>

<?php  require 'application/views/templates/footer.php';?>