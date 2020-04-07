<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Strong Fit</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <style type="text/css">
        {box-sizing: border-box;}
        body {background: #f69a73;}
        .decor {
            position: relative;
            max-width: 400px;
            margin: 50px auto 0;
            background: white;
            border-radius: 30px;
        }
        .form-left-decoration,
        .form-right-decoration {
            content: "";
            position: absolute;
            width: 50px;
            height: 20px;
            background: #f69a73;
            border-radius: 20px;
        }
        .form-left-decoration {
            bottom: 60px;
            left: -30px;
        }
        .form-right-decoration {
            top: 60px;
            right: -30px;
        }
        .form-left-decoration:before,
        .form-left-decoration:after,
        .form-right-decoration:before,
        .form-right-decoration:after {
            content: "";
            position: absolute;
            width: 50px;
            height: 20px;
            border-radius: 30px;
            background: white;
        }
        .form-left-decoration:before {top: -20px;}
        .form-left-decoration:after {
            top: 20px;
            left: 10px;
        }
        .form-right-decoration:before {
            top: -20px;
            right: 0;
        }
        .form-right-decoration:after {
            top: 20px;
            right: 10px;
        }
        .circle {
            position: absolute;
            bottom: 80px;
            left: -55px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: white;
        }
        .form-inner {padding: 50px;}
        .form-inner input,
        .form-inner textarea {
            display: block;
            width: 100%;
            padding: 0 20px;
            margin-bottom: 10px;
            background: #E9EFF6;
            line-height: 40px;
            border-width: 0;
            border-radius: 20px;
            font-family: 'Roboto', sans-serif;
        }
        .form-inner input[type="submit"] {
            margin-top: 30px;
            background: #f69a73;
            border-bottom: 4px solid #d87d56;
            color: white;
            font-size: 14px;
        }
        .form-inner textarea {resize: none;}
        .form-inner h3 {
            margin-top: 0;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            font-size: 24px;
            color: #707981;
        }
        </style>
</head>
<body>
<form method="post" action="form.php" class="decor">
    <div class="form-left-decoration"></div>
    <div class="form-right-decoration"></div>
    <div class="circle"></div>
    <div class="form-inner">
        <h3>Записатись</h3>
        <input name="first_name" type="text" placeholder="Ім'я">
        <input name="email" type="email" placeholder="Email">
        <input name="telephone" type="text" placeholder="Телефон">
        <textarea name="info" placeholder="Побажання, додаткова інформація." rows="3"></textarea>
        <input type="submit" value="Отправить">
    </div>
</form>
</body>
</html>