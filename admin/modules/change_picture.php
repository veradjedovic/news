<?php 
if(isset($_GET['article_id'])){
$id = $_GET['article_id'];

$article = Articles::get($id);
$_SESSION['change_picture'] = $article->article_picture_small;
$_SESSION['article_id'] = $article->article_id;
//var_dump($_SESSION['change_picture']);
}

//var_dump($_SESSION['articles']->article_picture_small);
?>
<a href="home.php?page=3&article_id=<?php echo $_SESSION['article_id'] ?>"<button class="btn-primary form-control" type="submit" name="insert">Back</button></a>

<h1>Change Picture</h1><br>
<img src='../view/images/<?php echo $_SESSION['change_picture']?>'>
<br><br>
<form method="POST" action="home.php?page=6" enctype="multipart/form-data">
    <input type="file" name="img" required><br>
    <input class="form-control" type="submit" value="Change" name="change">
</form>


 