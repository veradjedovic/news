<?php
if (isset($_POST['insert'])){
    
    //$article = Articles::get($_SESSION['article']->article_id);
    
            $article = new Articles();
            $article->article_id = $_POST['article_id'];
            $article->article_title = $_POST['article_title'];
            $article->article_subtitle = $_POST['article_subtitle'];
            $article->article_creator = $_POST['article_creator'];
            $article->article_picture_small = $_POST['article_picture_small'];
            //$article->article_time = date("Y-m-d H-m-i");
            $article->article_intro_text = $_POST['article_intro_text'];
            $article->article_text = $_POST['article_text'] ;
            $article->article_slider_status = $_POST['slider'];
            $article->article_index_status = $_POST['homepage'];
            $article->article_category_page_status = $_POST['maincat'];
            $article->main_category_top_story = $_POST['topstory'];
            $article->article_status = $_POST['publish'];
            $_SESSION['articles'] = $article;
            $article->save();
            header("location: home.php?page=3");
            
            //var_dump($_SESSION);
}
?>