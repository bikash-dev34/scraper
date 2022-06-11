<?php 
include_once'simple_html_dom.php';
$html=file_get_html('https://annapurnapost.com/news/kp-oli-25-206112',false);
// $title=$html->find("div#content",0)->innertext;
// echo $html;
// echo $title;
// echo $html->find('title',0)->plaintext;

$results=array();
if(!empty($html)){
    $div_class = $title = "";
    $i = 0;
    foreach($html-find(".detail-page-desktop") as $div_class){
        //Extract the news title
        foreach()
    }
}



?>