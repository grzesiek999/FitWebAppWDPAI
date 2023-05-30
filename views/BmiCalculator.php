<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/Main.css">

    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Menu.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Footer.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/BmiCalculator.css">

    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Menu.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Footer.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/BmiCalculator.css">

    <script defer src="../scripts/BmiCalculator.js"></script>


</head>
<body>
    
    <?
        if ($_SESSION["username"] == null) include("organisms/menu.php");
        else include("organisms/menuLoggedUser.php");
    ?>

    <main>
        <div class="content">
            <div class="calculator-container">
                <label class="main-title">Oblicz swoje BMI</label>
                <label class="second-title">Wprowadź swoje dane:</label>
                <div class="data-div">
                    <label class="label-text">Podaj swóją wage:</label>
                    <input id="weight" name="weight" type="number" value=0>
                    <label class="label-text">kg</label>
                </div>
                <div class="data-div">
                    <label class="label-text">Podaj swój wzrost:</label>
                    <input id="height" name="height" type="number" value=0>
                    <label class="label-text">cm</label>
                </div>
                <button id="b1" type="button">Oblicz</button>
            </div>
            <div class="results-container" style="display: none;">
                <div class="result-div"></div>
                <div class="text-result-div"></div>

                <label class="ul-label-title">Skala BMI:</label>
                <ul>
                    <li>powyżej 40 - otyłość skrajna</li>
                    <li>35 - 39.99 - otyłość II stopnia</li>
                    <li>30 - 34.99 - otyłość I stopnia</li>
                    <li>25 - 29.99 - nadwaga</li>
                    <li>18.5 - 24.99 - waga prawidłowa</li>
                    <li>17 - 18.49 - niedowaga</li>
                    <li>16 - 16.99 - wychudzenie</li>
                    <li>mniej niż 16 - wygłodzenie</li>
                </ul>
            </div>
        </div>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <? include("organisms/footer.php"); ?>
    </footer>
    
</body>
</html>