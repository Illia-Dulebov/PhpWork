<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <title>Strong Fit</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <style type="text/css">
        body {background: #f69a73;}
        .cl {
            text-align: center;
            font-size: 30px;
            font-family: 'Muli Regular Roman', sans-serif;
        }
    </style>
</head>
<body>
<div class="cl">
    <?php
    $_POST["first_name"] = strip_tags($_POST["first_name"]);
    $_POST["telephone"] = strip_tags($_POST["telephone"]);
    $_POST["email"] = strip_tags($_POST["email"]);
    if (!empty($_POST["first_name"]) && !empty($_POST["telephone"]) && !empty($_POST["email"])) {
        echo "Дякую за вашу заявку!<br>";
        echo "Зміст заявки:<br>";
        echo "Ім'я - ".$_POST["first_name"];
        echo "<br>";
        echo "Телефон - ".$_POST["telephone"];
        echo "<br>";
        echo "Електронна пошта - ".$_POST["email"];
        if (!empty($_POST["info"])) {
            echo "<br>";
            echo "Додаткова інформація - ".$_POST["info"];
        }
    }
    else {
        echo "Деяких данних не знайдено, спробуйте ще раз!<br>";
    }
    ?>
    <a href="http://localhost/myProject1/Strong-Fit/diffPage.php?page=LandMain"><br>Повернутися на головну</a>
</div>
</body>
</html>
