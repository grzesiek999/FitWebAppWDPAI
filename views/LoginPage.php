<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/Main.css">

    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Menu.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Footer.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/LoginPage.css">

    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Menu.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Footer.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/LoginPage.css">


</head>
<body>
    
    <?
        if ($_SESSION["username"] == null) include("organisms/menu.php");
        else include("organisms/menuLoggedUser.php");
    ?>

    <main>
        <div class="content">
            <div class="container">
                <span class="login-panel-border"></span>
                <form action="login" method="POST">
                    <label class="title-label">Logowanie</label>
                    <label class="panel-label">Adres email:</label>
                    <input name="email" type="email" placeholder="email@gmail.com" onfocus="this.placeholder=''" onblur="this.placeholder='email@gmail.com'">
                    <label class="panel-label">Hasło:</label>
                    <input name="password" type="password" placeholder="password" onfocus="this.placeholder=''" onblur="this.placeholder='password'">
                    <a class="a-passowrd-restore" href="passwordRestore">Przywróc hasło</a>
                    <div class="div-login-form-buttons">
                        <button type="submit">Zaloguj</button>
                        <a href="createAccount"><button type="button">Utwórz konto</button></a>
                    </div>
                </form>
            </div>
            <div class="messages">
                <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                ?>
            </div>
        </div>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <? include("organisms/footer.php"); ?>
    </footer>
    
</body>
</html>