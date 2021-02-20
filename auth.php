<?php
include "included/connexion_bdd.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$username'";
$conn = $bdd->prepare($sql);
$conn->execute();
$result = $conn->fetchAll(PDO::FETCH_ASSOC);

if ($_POST['username'] === $result[0]['email']) {
    if (password_verify($password, $result[0]['password'])) {
        echo 'Bienvenu  ' . $result[0]['firstname'] . ' - ' . $result[0]['lastname'];
    } else {
        echo 'Le mot de passe est incorrect.';
    }
} else {
    echo json_encode(array('success' => 0));
}