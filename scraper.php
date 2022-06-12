<?php 
include_once'simple_html_dom.php';
$html_1=file_get_html('https://theannapurnaexpress.com/news/editorial-ditch-the-paper-5984',false);
$html_2=file_get_html('https://theannapurnaexpress.com/news/editorial-deubas-unfulfilling-delhi-trip-5250',false);
$html_3=file_get_html('https://theannapurnaexpress.com/news/nepal-us-under-icc-mens-cricket-world-cup-league-2-ends-in-draw-6459',false);
$html_4=file_get_html('https://theannapurnaexpress.com/news/sudurpaschim-province-lagging-behind-in-economic-progress-despite-huge-potential-nrb-study-6463',false);
$html_5=file_get_html('https://theannapurnaexpress.com/news/asian-cup-qualifiers-nepal-lose-to-kuwait-6456',false);
$html_6=file_get_html('https://theannapurnaexpress.com/news/in-wto-meeting-nepal-calls-for-bridging-the-digital-divide-6462',false);
$html_7=file_get_html('https://theannapurnaexpress.com/news/nsu-part-time-professors-open-padlock-of-tu-vice-chancellors-office-after-5-months-6458',false);
$html_8=file_get_html('https://theannapurnaexpress.com/news/nepal-records-19-new-covid-19-cases-on-sunday-6461',false);
$html_9=file_get_html('https://theannapurnaexpress.com/news/editorial-now-nepal-police-5728',false);
$html_10=file_get_html('https://theannapurnaexpress.com/news/170-seats-for-dalit-women-representatives-go-unclaimed-5727',false);
// $html_11=file_get_html('https://theannapurnaexpress.com/news/whos-tracking-the-campaign-money-5726',false);
// $html_12=file_get_html('https://theannapurnaexpress.com/news/indian-police-step-up-arrests-to-stop-religious-unrest-over-anti-islam-remarks-6457',false);
// $html_13=file_get_html('https://theannapurnaexpress.com/news/asian-cup-qualifiers-nepal-lose-to-kuwait-6456',false);
// $html_14=file_get_html('https://theannapurnaexpress.com/news/us-drops-covid-testing-for-incoming-international-air-travelers-6455',false);
// $html_15=file_get_html('https://theannapurnaexpress.com/news/chinas-new-troubles-in-nepal-6454',false);
// $html_16=file_get_html('https://theannapurnaexpress.com/news/communicating-with-emotional-intelligence-6453',false);
// $html_17=file_get_html('https://theannapurnaexpress.com/news/communicating-with-emotional-intelligence-6453',false);
// $html_18=file_get_html('https://theannapurnaexpress.com/news/speaker-sapkota-directs-government-to-provide-fertilizers-to-farmers-6452',false);
// $html_19=file_get_html('https://theannapurnaexpress.com/news/pradeep-gyawalis-question-is-deuba-visiting-the-us-in-the-capacity-of-prime-minister-or-defence-minister-6451',false);
// $html_20=file_get_html('https://theannapurnaexpress.com/news/12th-wto-ministerial-meeting-commences-today-badu-to-lead-the-nepali-delegation-6450',false);
// $html_21=file_get_html('https://theannapurnaexpress.com/news/china-warns-taiwan-independence-would-trigger-war-6449',false);
// $html_22=file_get_html('https://theannapurnaexpress.com/news/cristiano-ronaldo-us-judge-dismisses-rape-lawsuit-6448',false);
// $html_23=file_get_html('https://theannapurnaexpress.com/news/china-footage-of-women-attacked-in-restaurant-sparks-outrage-6447',false);
// $html_24=file_get_html('https://theannapurnaexpress.com/news/march-for-our-lives-tens-of-thousands-rally-for-stricter-us-gun-laws-6446',false);
// $html_25=file_get_html('https://theannapurnaexpress.com/news/ukraine-russia-said-to-be-using-more-deadly-weapons-in-war-6445',false);
// $html_26=file_get_html('https://theannapurnaexpress.com/news/nepali-delegation-arrives-in-geneva-to-attend-12th-ministerial-meeting-of-wto-6444',false);
// $html_27=file_get_html('https://theannapurnaexpress.com/news/tremor-felt-in-kathmandu-6443',false);
// $html_28=file_get_html('https://theannapurnaexpress.com/news/tracking-nepals-monsoons-6442',false);
// $html_29=file_get_html('https://theannapurnaexpress.com/news/photo-feature-lessons-in-kindness-6441',false);
// $html_30=file_get_html('https://theannapurnaexpress.com/news/apex-roundtable-the-energy-vision-nepal-needs-6440',false);



// $title=$html->find("div.news-detail-heading h2",0)->plaintext;
// echo $html;
// echo $title;
// echo $html->find('title',0)->plaintext;
// var_dump($html);


    $div_class = $title = "";
  
    echo"<pre>";
    foreach($html_1->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
            echo $newsheading->plaintext;
            echo"<br>";
          
         }
             //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
           echo $figurcaption->plaintext;
            echo"<br>";
            // var_dump(figurcaption);
            // print_r($figurcaption);
        }
       
       
         
       
//         //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
            echo $pubnews->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
           echo $pudate->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
             echo"<br>";
         }
         
}

 //second article loop 

    $div_class = $title = "";
    $i = 0;
    echo"<pre>";
 foreach($html_2->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
       
       
       
    }

 //Third article
  $div_class = $title = "";
    $i = 0;
    echo"<pre>";
 foreach($html_3->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
             
       
    }

//Fourth article
  $div_class = $title = "";
    $i = 0;
    echo"<pre>";
 foreach($html_4->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
            
       
    }
    // Fifth article
      $div_class = $title = "";
    
    echo"<pre>";
 foreach($html_5->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
       
             
    }

//Sixth article
  $div_class = $title = "";
    
    echo"<pre>";
 foreach($html_6->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
             
       
    }

//Seventh article
  $div_class = $title = "";
    $i = 0;
    echo"<pre>";
 foreach($html_7->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
             
       
    }
    //Eight article
      $div_class = $title = "";
    $i = 0;
    echo"<pre>";
 foreach($html_8->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
       
       
       
    }
    //Nineth aticle
      $div_class = $title = "";
    $i = 0;
    echo"<pre>";
 foreach($html_9->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
       
       
       
    }
// 10 th article
  $div_class = $title = "";
    $i = 0;
    echo"<pre>";
 foreach($html_10->find(".related-news") as $div_class){
         foreach($div_class->find(".news-detail-heading h2") as $newsheading){
           echo $newsheading->plaintext;
             echo"<br>";
         }
        //Extract the imafe caption
        foreach($div_class->find("div.detail-news-imageholder p") as $figurcaption){
            echo $figurcaption->plaintext;
              echo"<br>";
            // var_dump(figurcaption);
        }
        //Extract publish by
        foreach($div_class->find("div.news-date-author-wrapper span.author a.n") as $pubnews){
           echo $pubnews->plaintext;
             echo"<br>";
            // var_dump($pubnews);
        }
         //Extract date published
        foreach($div_class->find("div.news-date-author-wrapper span.posted-on .published") as $pudate){
            echo $pudate->plaintext;
              echo"<br>";
            // var_dump($pubnews);
        }
         foreach($div_class->find("div.news-content-text") as $newsdetails){
           echo $newsdetails->plaintext;
             echo"<br>";
         }
         foreach($div_class->find("div.related-news-widget span") as $newsrelated){
           echo $newsrelated->plaintext;
             echo"<br>";
         }
          foreach($div_class->find("div.apx-post-title h5 a") as $news1){
           echo $news1->plaintext;
         }
         
       
       
       
    }


   
//    
?>