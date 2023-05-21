<!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Piekarnia</title>
    </head>
    <body>
        <?php
        /*
        $imie = "Wiktor";
        echo "$imie, witaj na stronie!";
        echo $imie.', witaj na stronie!';*/
        ?>
        <h1>Zamówienie online</h1>
        <form action="order.php" method="post">
            <label for="paczki">Ile pączków (0.99 PLN/szt.)</label>
            <input id="paczki" type="text" name="paczki"/>
            <br>
            <label for="grzebien">Ile grzebieni (1.29 PLN/szt.)</label>
            <input id="grzebien" type="text" name="grzebien">
            <br>
            <input type="submit" value="wyślij zamówienie">
        </form>
        <a href="../index.html">Powrót do strony głównej</a>
    </body>
</html>