<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET)) {
    // Zpracování odeslaných dat
    $jmeno = htmlspecialchars($_GET['jmeno']);
    $prijmeni = htmlspecialchars($_GET['prijmeni']);
    $datum_narozeni = htmlspecialchars($_GET['datum_narozeni']);
    $misto_narozeni = htmlspecialchars($_GET['misto_narozeni']);
    $pohlavi = htmlspecialchars($_GET['pohlavi']);
    $telefon = htmlspecialchars($_GET['telefon']);
    
    echo "<h1>Zadané údaje:</h1>";
    echo "<p>Jméno: $jmeno</p>";
    echo "<p>Příjmení: $prijmeni</p>";
    echo "<p>Datum narození: $datum_narozeni</p>";
    echo "<p>Místo narození: $misto_narozeni</p>";
    echo "<p>Pohlaví: $pohlavi</p>";
    echo "<p>Telefon: $telefon</p>";
} else {
    // Zobrazení formuláře
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulář pro zadání osobních údajů</title>
    </head>
    <body>
        <h1>Zadejte své osobní údaje</h1>
        <form method="GET">
            <label for="jmeno">Jméno:</label><br>
            <input type="text" id="jmeno" name="jmeno" required><br><br>
            
            <label for="prijmeni">Příjmení:</label><br>
            <input type="text" id="prijmeni" name="prijmeni" required><br><br>
            
            <label for="datum_narozeni">Datum narození:</label><br>
            <input type="date" id="datum_narozeni" name="datum_narozeni" required><br><br>
            
            <label for="misto_narozeni">Místo narození (město):</label><br>
            <input type="text" id="misto_narozeni" name="misto_narozeni" required><br><br>
            
            <label for="pohlavi">Pohlaví:</label><br>
            <input type="radio" id="muz" name="pohlavi" value="Muž" required>
            <label for="muz">Muž</label><br>
            <input type="radio" id="zena" name="pohlavi" value="Žena" required>
            <label for="zena">Žena</label><br><br>
            
            <label for="telefon">Telefonní číslo:</label><br>
            <input type="tel" id="telefon" name="telefon" required><br><br>
            
            <button type="submit">Odeslat</button>
        </form>
    </body>
    </html>
    HTML;
}
?>
