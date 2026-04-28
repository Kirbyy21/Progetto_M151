<h1>Login</h1>
<form method="post" action="<?php echo URL; ?>login/tryLogin">
    <div class="imgcontainer">
        <img src="img_avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="email"><b>Email</b></label>
        <input  placeholder="Enter Email" name="email" required value="<?php
        if(isset($_SESSION['mail'])) {
            echo $_SESSION['mail'];
            unset($_SESSION['mail']);
        }
        ?>"
        >
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required value="<?php
        if(isset($_SESSION['psswd'])) {
            echo $_SESSION['psswd'];
            unset($_SESSION['psswd']);
        }
        ?>"
        >
        <?php
        if(isset($_SESSION['error'])) {
            echo "<p>";
            echo $_SESSION['error'];
            echo "</p>";
            unset($_SESSION['error']);
        }
        ?>

        <button>Login</button>
    </div>
</form>