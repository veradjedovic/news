<form action="" method="POST" enctype="multipart/form-data">
    <label for="article_title">Article title:</label><br>
    <input class="form-control" type="text" name="article_title" id="article_title"><br><br>
    
    <label for="article_subtitle">Article subtitle:</label><br>
    <input class="form-control" type="text" name="article_subtitle" id="article_subtitle"><br><br>
    
    <label for="article_creator">Article creator:</label><br>
    <input class="form-control" type="text" name="article_creator" id="article_creator"><br><br>
      <?php  
          /**********************************************************************************/
            $allMainCats = MainCats::getAll(); //all main cats from table main_cat
            $session_cats = $_SESSION['main_cats'] = $allMainCats;
            //var_dump($session_cats);
          /**********************************************************************************/
          ?>
       
    <div class="ui-field-contain">
    <label for="select-native-4">Optgroup (if supported):</label>
    <select class="form-control" name="cat" id="select-native-4">
        <option>Choose a category </option>
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
        </optgroup>
    </select>
</div>
    <br><br>
    <textarea name="article_text" style="height: 400px;"></textarea><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php    if (isset($_POST['cat'])){
        var_dump($_POST['cat']);
         $cate =  explode(" ", $_POST['cat']);
         var_dump($cate);
                }
                //var_dump($businessCats);
               
?>