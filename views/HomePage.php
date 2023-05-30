<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/Main.css">

    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Menu.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/Footer.css">
    <link rel="stylesheet" media="screen and (min-width: 800px)" type="text/css" href="../css/Desktop/HomePage.css">

    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Menu.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/Footer.css">
    <link rel="stylesheet" media="screen and (max-width: 799px)" type="text/css" href="../css/Mobile/HomePage.css">

</head>
<body>

    <?
        if ($_SESSION["username"] == null) include("organisms/menu.php");
        else include("organisms/menuLoggedUser.php");
    ?>
    
    <main>
        <div class="content">
            <div class="content-header-conatiner">
                <h3>Zdrowe odrzywianie, diety, treningi i wiele innych</h3>
                <span>Zapraszam cię na moją stronę, którą poświęcam dla osób chcący zdobyć wiedzę na temat zdrowego stylu życia.
                    Na swojej stronie poruszam tematy zarówno od strony diet jak i treningów, wartościowe informację odnajdzie tu osoba
                    początkująca jak i średnio zaawansowana.</span>
                <div class="img05-div"><img src="../public/images/Photos/img05.avif" alt="img05-div error"></div>
                <span>Celem mojej strony jest przekazanie bardzo ważnej wiedzy w dzisiejszych czasach na temat zdrowego odrzywiania 
                    oraz prowadzenia odpowiedniego trybu życia dzięki, któremu nasz organizm będzie lepiej funkcjonował.</span>
            </div>
            <div class="cointainer-separator"></div>
            <div class="content-conatiner">
                <h3>Co możesz zaleźć w poszczególej zakładce</h3>
                <p>W zakładce Infomację znajdziesz informację na temat mojej działalności, zodbytej wiedzy, cerftyfikatów oraz zdobytych tytułów.</p>
                <p>Dowiesz się jak kilku rzeczy o mnie oraz jaką drogę ja przeszedłem aby nauczyć się prowadzić zdrowy tryb życia oraz pomagać w tym innym osobom.</p>
                <div class="diets-div-describe">
                    <div class="img04-div"><img src="../public/images/Photos/img04.jpg" alt="img04-div error"></div>
                    <div class="diets-describe">
                        W zakładce diety będzieć miał/ła możliwość wykupić od de mnie diete, stworzoną osobiście prze ze mnie dostowaną indywidualnie dla ciebie i pod twoje potrzeby.
                        Zakładka ta jest dostępna tylko dla zalogowanych użytkowników, następnie po wejściu w zakładke zostanie przedstawione kilka opcji i dalsze instrukcje. 
                    </div>
                </div>
                <div class="trainings-div-describe">
                    <div class="training-describe">
                        W zakładce treningi będzieć miał/ła możliwość wykupić od de mnie plan treningowy, stworzony osobiście prze ze mnie dostowany indywidualnie dla ciebie i pod twoje potrzeby.
                        Zakładka ta podobnie jak diety jest dostępna tylko dla zalogowanych użytkowników, następnie po wejściu w zakładke zostanie przedstawione kilka opcji i dalsze instrukcje. 
                    </div>
                    <div class="img02-div"><img src="../public/images/Photos/img02.jpg" alt="img02-div error"></div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <? include("organisms/footer.php"); ?>
    </footer>

</body>
</html>