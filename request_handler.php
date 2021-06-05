<?php
session_start();

// var_dump($_POST);

$nom = $_POST['nom'];
$age = $_POST['age'];

$user = 'root';
$pass = '';

$_SESSION['nom'] = $nom;
$_SESSION['age'] = $age;

// $query = "INSERT INTO user (nom, age) VALUES ('$nom', $age);";

// $dbh = new PDO('mysql:host=localhost;dbname=myapp', $user, $pass);
