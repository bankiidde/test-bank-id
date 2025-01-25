<?php
// db.php - koppling till databasen

$servername = "localhost"; // Servernamn
$username = "root"; // Användarnamn för MySQL
$password = ""; // Lösenord för MySQL
$dbname = "bank_id"; // Databasens namn

// Skapa en anslutning till MySQL-databasen
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollera anslutningen
if ($conn->connect_error) {
    die("Anslutningen misslyckades: " . $conn->connect_error);
}
echo "Ansluten till databasen";

// Stäng anslutningen när du är klar
// $conn->close();
?>
