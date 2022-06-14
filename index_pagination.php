<?php 

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "scrapindex_db");
$conn =mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
  //define total number of results you want per page  
    $results_per_page = 30;  
    $sql = "SELECT title_news FROM  tbl_scrap";  
    // var_dump($sql);
    $result = mysqli_query($conn , $sql);  
     $number_of_results = mysqli_num_rows($result);  
     //  var_dump($number_of_result);

     


    //determine the total number of pages available  
      $number_of_pages = ceil ($number_of_results / $results_per_page);
   // determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }

     //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
   //retrieve the selected results from database   
    $sql = "SELECT * FROM tbl_scrap LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $sql);  
      
   //display the retrieved result on the webpage  
   echo'<br><hr>';
    while ($row = mysqli_fetch_array($result)) {  
        echo $row['id'] . ' ' . $row['title_news'].'</br>';  
    }  
echo'<br><hr>';
  //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_pages; $page++) {  
        echo '<a href = "index_pagination.php?page=' . $page . '">' . $page . ' </a>';  
    }  
    echo'<br><hr>';
?>