<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "themesell");
$mail = mysqli_real_escape_string($db, $_POST['mail']);
$pass = mysqli_real_escape_string($db, $_POST['password']);
$pass = hash('sha-512', $pass);
$query = "SELECT id FROM author WHERE mail= '$mail' AND password= '$pass'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) == 1){
    $_SESSION['author'] = mysqli_fetch_array($result)[0];
    header("Loaction: http://localhost:7882/themesell/admin/insert_post.html");
}
else{
    header("Loaction: http://localhost:7882/themesell/login.php?error=1");
    
}
?>