<?php 
if(isset($_GET['article_id'])){
$id = $_GET['article_id'];

$article = Articles::get($id);

$_SESSION['articles'] = $article;
//var_dump($_SESSION['article']);
}
?>
 <a href="home.php?page=2"<button class="btn-primary form-control" type="submit" name="insert">Back</button></a>
 <h1>Edit Article</h1><br>
 <a href='../index.php?controller=News&method=index&id=<?php echo $article->article_id; ?>' target='_blank' >View article on site</a><br><br>
<img src='../view/images/<?php echo $_SESSION['articles']->article_picture_small?>'><br><br>
<a href='home.php?page=5&article_id=<?php echo $_SESSION['articles']->article_id; ?>'><button type="button" class="form-control btn-success">Change Picture</button></a><br>
<form action="home.php?page=4" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="article_id" value="<?php echo $_SESSION['articles']->article_id; ?>">
    <input type="hidden" name="article_picture_small" value="<?php echo $_SESSION['articles']->article_picture_small; ?>">
    <label for="article_title">Article title:</label><br>
    <input class="form-control" type="text" name="article_title" id="article_title" value="<?php echo $_SESSION['articles']->article_title;?>" placeholder="Article title" data-validate="required,number"><br><br>
    
    <label for="article_subtitle">Article subtitle:</label><br>
    <input class="form-control" type="text" name="article_subtitle" id="article_subtitle" value="<?php echo $_SESSION['articles']->article_subtitle;?>" placeholder="Article subtitle"><br><br>
    
    <label for="article_creator">Article creator:</label><br>
    <input class="form-control" type="text" name="article_creator" id="article_creator"  value="<?php echo $_SESSION['articles']->article_creator;?>"placeholder="Article creator"><br><br>
   
    <label for="article_intro_text">Article intro text:</label><br>
    <input class="form-control" type="text" name="article_intro_text" id="article_intro_text" value="<?php echo $_SESSION['articles']->article_intro_text; ?>" placeholder="Article intro text"><br><br>
    <textarea name="article_text" style="height: 400px;"><?php echo $_SESSION['articles']->article_text; ?></textarea><br>
    
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Show in Slider</th>
                <th>Show in Home Page</th>
                <th>Show in Main Category Page</th>
                <th>Show in Top Story in Category</th>
                <th>Publish in Website</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Show <input type="radio" name="slider" value="1" <?php echo ($_SESSION['articles']->article_slider_status == 1?'checked':'') ?>><br>
                Hide <input type="radio" name="slider" value="0" <?php echo ($_SESSION['articles']->article_slider_status == 0?'checked':'') ?>></td>
              
                <td>Show <input type="radio" name="homepage" value="1" <?php echo ($_SESSION['articles']->article_index_status == 1?'checked':'') ?>><br>
                Hide <input type="radio" name="homepage" value="0" <?php echo ($_SESSION['articles']->article_index_status == 0?'checked':'') ?>></td>
                
                <td>Show <input type="radio" name="maincat" value="1" <?php echo ($_SESSION['articles']->article_category_page_status == 1?'checked':'') ?>><br>
                Hide <input type="radio" name="maincat" value="0" <?php echo ($_SESSION['articles']->article_category_page_status == 0?'checked':'') ?>></td>
                
                <td>Show <input type="radio" name="topstory" value="1" <?php echo ($_SESSION['articles']->main_category_top_story == 1?'checked':'') ?>><br>
                Hide <input type="radio" name="topstory" value="0" <?php echo ($_SESSION['articles']->main_category_top_story == 0?'checked':'') ?>></td>
                
                <td>Show <input type="radio" name="publish" value="1" <?php echo ($_SESSION['articles']->article_status == 1?'checked':'') ?>><br>
                Hide <input type="radio" name="publish" value="0" <?php echo ($_SESSION['articles']->article_status == 0?'checked':'') ?>></td>
            </tr>
       </tbody>
    </table>
    <button class="btn-success form-control" type="submit" name="insert">Save</button>
</form>

