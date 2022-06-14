<?php 
require_once'dbconnect.php';
require_once'simple_html_dom.php';
$html_1=file_get_html('https://theannapurnaexpress.com/news/editorial-ditch-the-paper-5984',false);
$html_2=file_get_html('https://theannapurnaexpress.com/news/editorial-deubas-unfulfilling-delhi-trip-5250',false);
$html_3=file_get_html('https://theannapurnaexpress.com/news/nepal-us-under-icc-mens-cricket-world-cup-league-2-ends-in-draw-6459',false);
$html_4=file_get_html('https://theannapurnaexpress.com/news/sudurpaschim-province-lagging-behind-in-economic-progress-despite-huge-potential-nrb-study-6463',false);
$html_5=file_get_html('https://theannapurnaexpress.com/news/asian-cup-qualifiers-nepal-lose-to-kuwait-6456',false);
$html_6=file_get_html('https://theannapurnaexpress.com/news/in-wto-meeting-nepal-calls-for-bridging-the-digital-divide-6462',false);


$results=array();
if(!empty($html_1)){
    $div_class = $title = "";
    $i = 0;
    echo"<pre>";
    foreach($html_1->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
            $results[$i]['newsheading']=$newsheading->plaintext;
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            $results[$i]['figurcaption']=$figurcaption->plaintext;
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
            $results[$i]['pubnews']=trim($pubnews->plaintext);
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            $results[$i]['pudate']=trim($pudate->plaintext);
            // var_dump($pubnews);
        }
       
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
            $results[$i]['news1']=$news1->plaintext;
         }
                
          $i++;
    }
      //  article 2 
 
       foreach($html_2->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
            $results[$i]['newsheading']=$newsheading->plaintext;
         }
        //Extract the image caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            $results[$i]['figurcaption']=$figurcaption->plaintext;
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
            $results[$i]['pubnews']=trim($pudate->plaintext);
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            $results[$i]['pudate']=trim($pudate->plaintext);
            // var_dump($pubnews);
        }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
            $results[$i]['news1']=$news1->plaintext;
         }      
          $i++;
         }

        //Third article
   
     
        foreach($html_3->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
            $results[$i]['newsheading']=$newsheading->plaintext;
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            $results[$i]['figurcaption']=$figurcaption->plaintext;
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
            $results[$i]['pubnews']=trim($pubnews->plaintext);
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            $results[$i]['pudate']=trim($pudate->plaintext);
            // var_dump($pubnews);
        }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
            $results[$i]['news1']=$news1->plaintext;
         }       
       
          $i++;
         }
         // Articlce 4
         foreach($html_4->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
            $results[$i]['newsheading']=$newsheading->plaintext;
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            $results[$i]['figurcaption']=$figurcaption->plaintext;
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
            $results[$i]['pubnews']=trim($pudate->plaintext);
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            $results[$i]['pudate']=trim($pudate->plaintext);
            // var_dump($pubnews);
        }
         
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
            $results[$i]['news1']=$news1->plaintext;
         }    
          $i++;
       }
       // article  5
       foreach($html_5->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
            $results[$i]['newsheading']=$newsheading->plaintext;
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            $results[$i]['figurcaption']=$figurcaption->plaintext;
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
            $results[$i]['pubnews']=trim($pubnews->plaintext);
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            $results[$i]['pudate']=trim($pudate->plaintext);
            // var_dump($pubnews);
        }
              
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
            $results[$i]['news1']=$news1->plaintext;
         }       
       
          $i++;
       }
        
     } 

// print_r($results);
// print_r($results[0]);
$netreq=json_encode($results,JSON_PRETTY_PRINT);
echo $netreq."\n";
$bytes = file_put_contents("myfile.json", $netreq); //generate json file
// echo "Here is the myfile data $bytes.";
// var_dump($netreq);
?>