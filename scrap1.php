<?php 
include_once'simple_html_dom.php';
$html=file_get_html('https://theannapurnaexpress.com/news/editorial-ditch-the-paper-5984',false);
// $title=$html->find("div#content",0)->innertext;
// echo $html;
// echo $title;
// echo $html->find('title',0)->plaintext;

$results=array();
if(!empty($html)){
    $div_class = $title = "";
    $i = 0;
    foreach($html->find(".related-news") as $div_class){
        //Extract the news title
        foreach($div_class->find("h1") as $newstitle){
            $results[$i]['newstitle']=$newstitle->plaintext;
        }
        //Extract image from news
        foreach($div_class->find(".img-responsive") as $imgdesktop){
            $results[$i]['imgdesktop']=$imgdesktop->outertext;
        }
        foreach($div_class->find(".detail-news-content") as $newsdetails){
            $results[$i]['newsdetails']=$newsdetails->plaintext;
        }
        foreach($div_class->find(".clearfix") as $adtemplate){
            $results[$i]['adtemplate']=$adtemplate->plaintext;
        }
         foreach ($div_class->find(".article-meta") as $author){
                 $results[$i]['author']=$author->plaintext;
      
              }
          $i++;
    }
}
       

print_r($results);
$netreq=json_encode($results);
// echo $netreq."\n";
var_dump($netreq);

?>