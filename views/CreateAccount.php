<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/Main.css">

    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Menu.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Footer.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/CreateAccount.css">

    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Menu.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Footer.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/CreateAccount.css">


</head>
<body>
    
    <?
        if ($_SESSION["username"] == null) include("organisms/menu.php");
        else include("organisms/menuLoggedUser.php");
    ?>

    <main>
        <div class="content">
            <div class="container">
                <label class="main-label-tile">Wypełnij formularz:</label>
                <form action="register" method="POST">
                    <div class="div-personal-data">
                        <label class="data-label-title">Dane osobowe:</label>
                        <label class="data-label">Twoje imię:</label>
                        <input name="name" type="text">
                        <label class="data-label">Twoje nazwisko:</label>
                        <input name="surname" type="text">
                        <label class="data-label">Data urodzenia:</label>
                        <input name="date" type="date">
                    </div>
                    <div class="div-login-data">
                        <label class="data-label-title">Dane do logowania:</label>
                        <label class="data-label">Podaj email:</label>
                        <input name="email" type="email">
                        <label class="data-label">Podaj hasło:</label>
                        <input name="password" type="password">
                        <label class="data-label">Powtórz hasło:</label>
                        <input name="password-repeat" type="password">
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
                    <div><button type="submit">Utwórz konto</button></div>
                </form>
            </div>
            <div class="CreateAccountBanner-div"><img src="../public/images/Banners/create_account_banner.png" alt="create_account_aanner error"></div>
        </div>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <? include("organisms/footer.php"); ?>
    </footer>
    
</body>
</html>