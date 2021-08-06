<?php
$db = mysqli_connect("localhost", "root", "", "themesell");
$mail = mysqli_real_escape_string($db, $_POST['mail']);
$pass = mysqli_real_escape_string($db, $_POST['password']);
$name = mysqli_real_escape_string($db, $_POST['name']);
$pass = hash('sha512', $pass);
$query = "INSERT into author (name, email, password) VALUES ( '$name','$mail', '$pass')";
$result = mysqli_query($db, $query);



?>