<?php

function getMainPosts(){
    $db = mysqli_connect("localhost", "root", "", "themesell");
    $query = "SELECT * FROM post ORDER BY date DESC LIMIT 20";
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($result)){
        $query = "SELECT name FROM category 
                INNER JOIN has_category ON category.id = has_category.category
        WHERE has_category.post = ".$row['id'];

        $cat_result = mysqli_query($db, $query);
        $categories = "";
        while ($category = mysqli_fetch_array($cat_result)){
            $categories .= '<p><span class="badge bg-success ml-1">'. $category['name'].'</span></p>';
        }
        
        echo '      
        <div class="col-md-4">
        <article class=" shadow p-0 m-2">
          <img src="./img/'.$row['id'].'.jpg" alt="'.$row['title'].'" class="img-fluid">
          <div class="article-content px-3 py-2">
            <h4>'.$row['title'].'</h4>
            <div class="d-flex justify-content-between">
              <p>'.substr($row['date'],0,10).'</p>
              <p>'.$categories.'</p>

              
            </div>
          </div>
        </article>
      </div>';
    }
}

?>