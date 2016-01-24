<?php
if(isset($_POST['change'])){
  /**********************************************************************************************************/ 
$name = explode(".",$_FILES['img']['name']);    
$time = date("H_m_i");
$final_article_picture_name = $name[0].$time.".".$name[1];
$final_article_picture_small_name = $name[0].$time."small.".$name[1];
$final_article_slider_picture = $name[0].$time."slider.".$name[1];
$final_article_slider_picture_small = $name[0].$time."slider_small.".$name[1];  
/*********************************************************************************************************************************/
//article picture
    $article_picture = new SimpleImage();
    $article_picture->load($_FILES['img']['tmp_name'])->resize(620, 387)->save("../view/images/".$final_article_picture_name);
 //article picture small  
    $article_picture_small = new SimpleImage();
    $article_picture_small->load($_FILES['img']['tmp_name'])->resize(145, 100)->save("../view/images/".$final_article_picture_small_name);
 //article slider picture 
    $article_slider_picture = new SimpleImage();
    $article_slider_picture->load($_FILES['img']['tmp_name'])->resize(636, 331)->save("../view/images/".$final_article_slider_picture);
 //article slider small
    $article_slider_picture_small = new SimpleImage();
    $article_slider_picture_small->load($_FILES['img']['tmp_name'])->resize(636, 331)->save("../view/images/".$final_article_slider_picture_small);
/*******************************************************************************************************************************************************/    
    
    $article = new Articles();
    $article->article_id = $_SESSION['article_id'];
    $article->article_picture_small = $final_article_picture_small_name;
    $article->article_picture = $final_article_picture_name;
    $article->article_picture_slider_small = $final_article_slider_picture_small;
    $article->article_picture_slider = $final_article_slider_picture;
    
    $_SESSION['change_picture'] = $final_article_picture_small_name;
    $article->save();
    
   //$_SESSION['change_picture'] = Articles::get($_SESSION['article_id']);
   
   //var_dump($_SESSION['change_picture']);
   header("location:home.php?page=5");
    
}