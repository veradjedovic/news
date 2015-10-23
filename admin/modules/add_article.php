<?php

?>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="article_title">Article title:</label><br>
    <input class="form-control" type="text" name="article_title" id="article_title" placeholder="Article title" required><br><br>
    
    <label for="article_subtitle">Article subtitle:</label><br>
    <input class="form-control" type="text" name="article_subtitle" id="article_subtitle" placeholder="Article subtitle"><br><br>
    
    <label for="article_creator">Article creator:</label><br>
    <input class="form-control" type="text" name="article_creator" id="article_creator" placeholder="Article creator"><br><br>
      <?php  
          /**********************************************************************************/
            $allMainCats = MainCats::getAll(); //all main cats from table main_cat
            $session_cats = $_SESSION['main_cats'] = $allMainCats;
            //var_dump($session_cats);
          /**********************************************************************************/
          ?>
       
    <div class="ui-field-contain">
    <label for="select-native-4">Choose a category:</label>
    <select class="form-control" name="cat" id="select-native-4">
        <option value="-1 -1">Choose a category </option>
        <optgroup label="<?php echo $allMainCats[0]->main_cat_name;?>">
            <?php 
   /*****************************************************************************/         
            $worldCats = Cats::getAll("where link_to_main = 1");
            foreach ($worldCats as $world){
                echo "<option value='{$session_cats[0]->main_cat_id}"." {$world->cat_id}'>{$world->cat_name}</option>";
              }
    /*******************************************************************************/          
            ?>
        </optgroup>
        <optgroup label="<?php echo $allMainCats[1]->main_cat_name; ?>">
            <?php
             /*****************************************************************************/         
            $politicsCats = Cats::getAll("where link_to_main = 2");
            foreach ($politicsCats as $politics){
                echo "<option value='{$session_cats[1]->main_cat_id}"." {$politics->cat_id}'>{$politics->cat_name}</option>";
              } 
    /*******************************************************************************/  
    ?>
        </optgroup>
        <optgroup label="<?php echo $allMainCats[2]->main_cat_name; ?>">
            <?php
             /*****************************************************************************/         
            $businessCats = Cats::getAll("where link_to_main = 3");
            foreach ($businessCats as $business){
                echo "<option value='{$session_cats[2]->main_cat_id}"." {$business->cat_id}'>{$business->cat_name}</option>";
              } 
    /*******************************************************************************/  
    ?>
        </optgroup>
        <optgroup label="<?php echo $allMainCats[3]->main_cat_name; ?>">
            <?php
             /*****************************************************************************/         
            $cultureCats = Cats::getAll("where link_to_main = 4");
            foreach ($cultureCats as $culture){
                echo "<option value='"." {$culture->cat_id}'>{$culture->cat_name}</option>";
              } 
    /*******************************************************************************/  
    ?>
        </optgroup>
        <optgroup label="<?php echo $allMainCats[4]->main_cat_name; ?>">
            <?php
             /*****************************************************************************/         
            $techCats = Cats::getAll("where link_to_main = 5");
            foreach ($techCats as $tech){
                echo "<option value='{$session_cats[4]->main_cat_id}"." {$tech->cat_id}'>{$tech->cat_name}</option>";
              } 
    /*******************************************************************************/  
    ?>
        </optgroup>
        <optgroup label="<?php echo $allMainCats[5]->main_cat_name; ?>">
            <?php
             /*****************************************************************************/         
            $sportsCats = Cats::getAll("where link_to_main = 6");
            foreach ($sportsCats as $sports){
                echo "<option value='{$session_cats[5]->main_cat_id}"." {$sports->cat_id}'>{$sports->cat_name}</option>";
              } 
    /*******************************************************************************/  
    ?>
        </optgroup>
        <optgroup label="<?php echo $allMainCats[6]->main_cat_name; ?>">
            <?php
             /*****************************************************************************/         
            $healthCats = Cats::getAll("where link_to_main = 7");
            foreach ($healthCats as $health){
                echo "<option value='{$session_cats[6]->main_cat_id}"." {$health->cat_id}'>{$health->cat_name}</option>";
              } 
    /*******************************************************************************/  
    ?>
        <img src=
        </optgroup>
    </select>
</div>
    <br><br>
    <label id="img">Upload image:</label>
    <input type="file" name="img" id="img"><br><br>
    <label for="article_intro_text">Article intro text:</label><br>
    <input class="form-control" type="text" name="article_intro_text" id="article_intro_text" placeholder="Article intro text"><br><br>
    <textarea name="article_text" style="height: 400px;"></textarea><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php    if (isset($_POST['cat'])){
        var_dump($_POST['cat']);
         $cate =  explode(" ", $_POST['cat']);
         //var_dump($cate);
         echo "Main category: ". $main_category = $cate[0]."<br>";
         echo "Subcategory: ". $sub_category = $cate[1];
         $name = explode(".",$_FILES['img']['name']);
         //var_dump($name);
  /**********************************************************************************************************/       
         $time = date("H_m_i");
         $final_article_picture_name = $name[0].$time.".".$name[1];
         $final_article_picture_small_name = $name[0].$time."_small.".$name[1];
         $final_article_slider_picture = $name[0].$time."slider.".$name[1];
         $final_article_slider_picture_small = $name[0].$time."slider_small.".$name[1];
      /**************************************************************************************/
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
            
    /**************************************************************************************/
            
            //var_dump($img);
            
            $article = new Articles();
            $article->article_title = $_POST['article_title'];
            $article->article_subtitle = $_POST['article_subtitle'];
            $article->article_creator = $_POST['article_creator'];
            $article->article_time = date("Y-m-d H-m-i");
            $article->article_main_cat = $main_category;
            $article->article_cat = $sub_category;
            $article->article_picture_small = $final_article_picture_small_name;
            $article->article_picture = $final_article_picture_name;
            $article->article_picture_slider_small = $final_article_slider_picture_small;
            $article->article_picture_slider = $final_article_slider_picture;
            $article->article_intro_text = $_POST['article_intro_text'];
            $article->article_text = $_POST['article_text'] ;
            $article->article_status = "1";
                }
                
                var_dump($_POST);
                
?>