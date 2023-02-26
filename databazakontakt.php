<?php
// Konektimi i databazes
$host= "localhost";
$user = "root";
$pass= "";
$db = "kontakt";

$conn = mysqli_connect($host, $user, $pass, $db);

// Kontrollo konektimin
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the data submitted from the contact form
$name = mysqli_real_escape_string($conn, $_POST['emri']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$message = mysqli_real_escape_string($conn, $_POST['mesazh']);

// Kodi per  SQL query per te dhenat ndatabaze
$sql = "INSERT INTO kontakt (emri, email, mesazh) VALUES ('$emri', '$email', '$mesazh')";

// Egzekutimi i databazes
if (mysqli_query($conn, $sql)) {
    echo "Data saved successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Mbyllja e konektimit ne databaze
mysqli_close($conn);
?>