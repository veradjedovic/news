<!-- Advanced Tables -->
<h1>View all Articles</h1> <br>

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
                       /**********************************************************************************************/
                           $articles = ViewArticles::getAll(); //all articles from viewArticles
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
                       /**********************************************************************************************/
                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<!--End Advanced Tables -->
         
                            
                        