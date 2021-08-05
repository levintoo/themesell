<?php
    echo "inserted succesfully";
    $title = $_POST['title'];
    $seo = $_POST['seotitle'];
    $category = $_POST['category']; // example 1 2 3 5
    $content = $_POST['content'];
    $author = $_POST['author'];

    $db = mysqli_connect("localhost", "root", "", "themesell");
    $query = "INSERT INTO post (title, seo_title ,content , author ) VALUES ('$title', '$seo', '$content', '$author')";
    mysqli_query($db, $query);
?>