<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "scrapindex_db");
$conn =mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// $h=mysql_connect('localhost','root','');
// mysql_connect_db("scrapindex_db",$h);

$filename="myfile.json";
$data=file_get_contents($filename);
$arr=json_decode($data,true);
// var_dump($arr);
foreach($arr as $row)

{
    // var_dump($row['newsheading']);
    $sql="INSERT INTO tbl_scrap(title_news , figure_caption , publish_by , update_on) VALUES('".$row["newsheading"]."','".$row["figurcaption"]."','".$row["pubnews"]."','".$row["pudate"]."')";
    // var_dump($row["newsheading"]);
// var_dump($sql);
    mysqli_query($conn,$sql);
   
}
 mysqli_close($conn);
// echo "Inserted success";
  