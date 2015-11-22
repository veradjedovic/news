<h2> Please choose a category:</h2><br>
<div class="btn-group btn-group-justified">
  <?php 
  $categories = MainCats::getAll(); 
  foreach ($categories as $category) {
      echo "<a href='home.php?page=7&cat_name={$category->main_cat_name}' class='btn btn-primary'>$category->main_cat_name</a>";
  }
  ?>  
</div>

<h5> Selected category:<b> <?php echo (isset($_GET['cat_name'])?$_GET['cat_name']:'Category is not selected!') ?></b></h5>
    <br><br>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Article Image</th>
                                            <th>Article Information</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                if(isset($_GET['cat_name'])){
                                    $cat_name = $_GET['cat_name'];
                                    $articles = ViewArticles::getAll("where main_cat_name='$cat_name' order by article_time desc");
                                      foreach ($articles as $article) {
                               echo "<tr class='odd gradeX'>
                                        <td><img src='../view/images/{$article->article_picture_small}'></td>
                                        <td>
                                            <b>Article ID:</b> {$article->article_id}<br>
                                            <b>Title:</b> {$article->article_title}<br>
                                            <b>Main Category:</b> {$article->main_cat_name}<br>
                                            <b>Cat:</b> {$article->cat_name}<br>
                                            <b>Created by:</b> {$article->article_creator}<br>
                                            <b>Published on:</b> {$article->article_time}<br>
                                            <b>Status: </b>".($article->article_status == 1?'Show':'Hide')."
                                         </td> 
                                         <td>
                                        <a href='home.php?page=3&article_id={$article->article_id}' target='_blank'>Edit</a><br>
                                         <a href='../index.php?controller=News&method=index&id={$article->article_id}' target='_blank' >View article on site</a>
                                         </td>
                                        </tr>";
                           }
                                } ?>
                                 
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
             

