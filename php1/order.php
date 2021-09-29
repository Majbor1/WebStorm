<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie</title>
</head>
<body>
    <?php
        $paczkow = $_POST['paczki'];
        $grzebieni = $_POST['grzebienie'];
        $jagodzianek = $_POST['jagodzianki'];
        $wiek = $_POST['wiek'];
        $dostawa = $_POST['dostawa'];
        $prom = $paczkow*(2/3);
        $prom = floor($prom);
        $prom = $prom+($paczkow%3);

        if($dostawa=="osobisty") {
            $suma = 0.99*$prom + 1.29*$grzebieni + 4*$jagodzianek + 0;
        }
        else if($dostawa=="inpost"){
            $suma = 0.99*$prom + 1.29*$grzebieni + 4*$jagodzianek + 10;
        }
        else{
            $suma = 0.99*$prom + 1.29*$grzebieni + 4*$jagodzianek + 17;
        }

        if($wiek>=18){
echo<<<END
        <h2>Podsumiwanie zamówienia</h2>

        <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Pączek (0.99 PLN/szt.)</td>
            <td>$paczkow</td>
            <td> <img src="https://bochen.pl/sklep/wp-content/uploads/2020/05/p%C4%85czek-z-marmolad%C4%85.jpg" height="150px" width="150px"> </<td>
        </tr>
        <tr>
            <td>Grzebień (1.29 PLN/szt.)</td>
            <td>$grzebieni</td>
            <td> <img src="https://srhrolnik.pl/piekarnia-cukiernia/wp-content/uploads/2020/02/ciastko-francuskie-grzebie%C5%84-CSZT302.png" height="150px" width="150px"> </<td>
        </tr>
        <tr>
            <td>Jagodzianka (4.00 PLN/szt.)</td>
            <td>$jagodzianek</td>
            <td> <img src="https://fc-mwj.pl/app/uploads/2019/03/zestawienie_jagodzianka-lbox-1200x1200-FFFFFF.png" height="150px" width="150px"> </<td>
        </tr>
        <tr>
            <td>Dostawa</td>
            <td>$dostawa</td>
END;
            if($dostawa=='inpost')
            {
                echo '<td><img src="https://dobrywzor.com.pl/wp-content/uploads/2018/11/Paczkomaty-InPost.jpg" height="150px"; width="150px"></td>';
            }
            else if($dostawa=='kurier'){
                echo '<td><img src="https://zielonapaczka.pl/wp-content/uploads/kurier.png" height="150px"; width="150px"></td>';
            }
            else{
                echo '<td><img src="https://seltis.iai-shop.com/data/include/cms/odbior-osobisty-gertz.png" height="150px"; width="150px"></td>';
            }
echo<<<END
        </tr>
        <tr>
            <td>SUMA</td>
            <td colspan="2">$suma zł</td>
        </tr>
        </table>
    
        <br>
        <a href="index.php">Powrót do strony głównej</a>
END;
        }
        else{
            echo "Nie można zrealizować zamówienia. Nie masz 18 lat.";
            echo '<br> <a href="index.php">Powrót do strony głównej</a>';
        }

    ?>
</body>
</html>