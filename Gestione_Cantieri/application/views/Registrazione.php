<?php require 'application/views/templates/header.php';?>
<form method="post" action="<?php echo URL; ?>Registrazione/tryRegister">

    <div class="container">
        <h1>Resgistrazione</h1>

        <!--div class="imgcontainer">
            <img src="<?php echo URL; ?>public/pictures/img_avatar.jpg" alt="Avatar" class="avatar">
        </div-->

        <label for="name"><b>Nome</b></label>
        <input  placeholder="Inserisci Nome" name="name" required value="<?php
        if(isset($_SESSION['name'])) {
            echo $_SESSION['name'];
            unset($_SESSION['name']);
        }
        ?>"
        ><br><br>
        <label for="email"><b>Email</b></label>
        <input  type="email" placeholder="Inserisci email" name="email" required value="<?php
        if(isset($_SESSION['mail'])) {
            echo $_SESSION['mail'];
            unset($_SESSION['mail']);
        }
        ?>"
        ><br><br>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Inserisci password" name="password" required value="<?php
        if(isset($_SESSION['psswd'])) {
            echo $_SESSION['psswd'];
            unset($_SESSION['psswd']);
        }
        ?>"
        ><br><br>
        <?php
        if(isset($_SESSION['error'])) {
            echo "<p>";
            echo $_SESSION['error'];
            echo "</p>";
            unset($_SESSION['error']);
        }
        ?>

        <button>Registrati</button>
    </div>
</form>
<?php  require 'application/views/templates/footer.php';?>
