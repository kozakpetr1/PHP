<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {

    $jmeno = htmlspecialchars($_POST['jmeno']);
    $prijmeni = htmlspecialchars($_POST['prijmeni']);
    $datum_narozeni = htmlspecialchars($_POST['datum_narozeni']);
    $misto_narozeni = htmlspecialchars($_POST['misto_narozeni']);
    $pohlavi = htmlspecialchars($_POST['pohlavi']);
    $telefon = htmlspecialchars($_POST['telefon']);
    
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Výsledky formuláře</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 50px auto;
                background: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                color: #333;
            }
            p {
                font-size: 1rem;
                margin: 10px 0;
                color: #555;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Zadané údaje</h1>
            <p><strong>Jméno:</strong> $jmeno</p>
            <p><strong>Příjmení:</strong> $prijmeni</p>
            <p><strong>Datum narození:</strong> $datum_narozeni</p>
            <p><strong>Místo narození:</strong> $misto_narozeni</p>
            <p><strong>Pohlaví:</strong> $pohlavi</p>
            <p><strong>Telefon:</strong> $telefon</p>
        </div>
    </body>
    </html>
    HTML;
} else {
    echo <<<HTML
    <!DOCTYPE html>
    <html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulář pro zadání osobních údajů</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .container {
                max-width: 600px;
                margin: 50px auto;
                background: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            h1 {
                text-align: center;
                color: #333;
            }
            form {
                display: flex;
                flex-direction: column;
            }
            label {
                font-weight: bold;
                margin-top: 10px;
            }
            input, button {
                padding: 10px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 1rem;
            }
            button {
                background-color: #007bff;
                color: white;
                border: none;
                cursor: pointer;
                margin-top: 20px;
            }
            button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Zadejte své osobní údaje</h1>
            <form method="POST">
                <label for="jmeno">Jméno:</label>
                <input type="text" id="jmeno" name="jmeno" required>
                
                <label for="prijmeni">Příjmení:</label>
                <input type="text" id="prijmeni" name="prijmeni" required>
                
                <label for="datum_narozeni">Datum narození:</label>
                <input type="date" id="datum_narozeni" name="datum_narozeni" required>
                
                <label for="misto_narozeni">Místo narození (město):</label>
                <input type="text" id="misto_narozeni" name="misto_narozeni" required>
                
                <label for="pohlavi">Pohlaví:</label>
                <label for="muz">Muž</label><input type="radio" id="muz" name="pohlavi" value="Muž" required>
                
                <label for="zena">Žena</label><input type="radio" id="zena" name="pohlavi" value="Žena" required>
                
                <label for="telefon">Telefonní číslo:</label>
                <input type="tel" id="telefon" name="telefon" required>
                
                <button type="submit">Odeslat</button>
            </form>
        </div>
    </body>
    </html>
    HTML;
}
