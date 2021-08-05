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

    $query ="SELECT id FROM post WHERE seo_title = '$seo'";
    $result = mysqli_query($db, $query);

    $row = mysqli_fetch_array($result);
    echo "ID is " . $row[0];

    $post_id = $row[0];
    $category_array = explode(" ", $category); // 123

    foreach($category_array as $el) {
        $query = "INSERT INTO has_category (post, category) VALUES ('$post_id', '$el')";
        mysqli_query($db, $query);
    }
?>