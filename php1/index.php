<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php1</title>
</head>
<body>
    <h1>Pączkarnia Online</h1>

    <form action="order.php" method="post">
    Ile pączków (0.99 PLN/szt.):
    <input type="text" name="paczki"/>
    <br><br>

    Ile grzebieni (1.29 PLN/szt.):
    <input type="text" name="grzebienie"/>
    <br><br>

    Ile jagodzianek (4.00 PLN/szt.):
    <input type="text" name="jagodzianki"/>
    <br><br>

    Sposób dostawy (4.00 PLN/szt.):
    <select name="dostawa">
        <option value="kurier">Kurier (17zł)</option>
        <option value="inpost">Paczkomat Inpost (10zł)</option>
        <option value="osobisty">Odbiór osobisty (gratis)</option>

    </select>
    <br><br>

    Podaj swój wiek:
    <input type="text" name="wiek"/>
    <br><br>

    <input type="submit" value="Wyślij zamówienie"/>
    </form>
</body>
</html>