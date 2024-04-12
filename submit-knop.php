<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ontvang de ingevulde gegevens van het formulier
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$provincie = $_POST['Provincie'];
$onderwerp = $_POST['onderwerp'];

// E-mailadres waar de e-mail naartoe moet worden gestuurd
$ontvanger_email = "niek_kosse@hotmail.com";

// Onderwerp van de e-mail
$onderwerp_email = "Nieuw bericht van contactformulier";

// Bericht dat in de e-mail wordt weergegeven
$bericht = "Voornaam: $voornaam\n";
$bericht .= "Achternaam: $achternaam\n";
$bericht .= "Provincie: $provincie\n";
$bericht .= "Bericht:\n$onderwerp";

// Stuur de e-mail
mail($ontvanger_email, $onderwerp_email, $bericht);

// Redirect de gebruiker terug naar de bedankpagina
header("Location: bedankt.html");
?>