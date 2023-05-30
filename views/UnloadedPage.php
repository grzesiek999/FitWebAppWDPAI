<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unloaded</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/Main.css">

    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Menu.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Footer.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/UnloadedPage.css">

    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Menu.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Footer.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/UnloadedPage.css">

</head>
<body>
    
    <?include("organisms/menu.php");?>

    <main>
        <div class="content">
            <div class="container">
                <label class="main-title-label">Wylogowano pomyślnie !</label>
            </div>
        </div>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <? include("organisms/footer.php"); ?>
    </footer>

</body>
</html>