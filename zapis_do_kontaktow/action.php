<!DOCTYPE html>
    <html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Piekarnia</title>
    </head>
    <body>
        <h1>Twoje dane</h1>
        <?php
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $nrtel = $_POST["nrtel"];
echo<<<END
    <table>
        <tr>
            <td>Imię</td>
            <td>Nazwisko</td>
            <td>Numer telefonu</td>
        </tr>
        <tr>
            <td>$imie</td>
            <td>$nazwisko</td>
            <td>$nrtel</td>
        </tr>
    </table>
END
        ?>
        
        <a href="../index.html">Powrót do strony głównej</a>
        <a href="index.php">Powrót do formularza</a>
    </body>
</html>