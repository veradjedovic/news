<?php
require_once 'config.php';
Session::start();
if(!isset($_SESSION['admin_status'])||$_SESSION['admin_status']!=1){
	header("location:index.php");
}

//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administration</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- icons -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
     <!--- add CDN Tynemce -->
     <script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<!-- Fancy Box -->
<script src="assets/js/fancyBox/lib/jquery-1.9.0.min.js"></script>
<script src="assets/js/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link href="assets/js/fancyBox/source/jquery.fancybox.css">
<script src="assets/js/fancyBox/source/jquery.fancybox.js"></script>
<script src="assets/js/fancyBox/source/jquery.fancybox.pack.js"></script>
<!-- Verify.js (with Notify.js included) -->
<script src="//raw.github.com/jpillora/verifyjs/gh-pages/dist/verify.notify.min.js"></script>

<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>




</head>
    <body style="zoom: 90%;">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Site Admin</a> 
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">                 
      <?php
      /**********************************************************************/
       /* $admin = Admin::get($_SESSION['admin_id']);
        
        echo "Last login: " . $admin->admin_last_login;*/
     /************************************************************************/
      ?>
      
       &nbsp; 
       
      <a href="logout.php" class="btn btn-danger square-btn-adjust">Log out <i class="fa fa-sign-out"></i></a></div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
		<li class="text-center">
                    <img src="assets/img/img.png" class="user-image img-responsive"/>
		</li>
                    <li>
                        <a  href="home.php?page=1"><i class="fa fa-pencil fa-3x"></i>Add new article</a>
                    </li>
                      <li>
                        <a  href="home.php?page=2"><i class="fa fa-desktop fa-3x"></i>View all articles</a>
                    </li>
                     <li>
                        <a  href="home.php?page=7"><i class="fa fa-picture-o fa-3x"></i>Articles by category</a>
                    </li>
                </ul>
               
            </div>
                    
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
           <div id="page-inner"> 
               
            <?php 
/******************************************************************************/         
                $default_page = (isset($_GET['page']))?$_GET['page']:1;
                $pages = array(
                    "1"=>"add_article.php",
                    "2"=>"view_articles.php",
                    "3"=>"edit_article.php",
                    "4"=>"updated_article.php",
                    "5"=>"change_picture.php",
                    "6"=>"updated_picture.php",
                    "7"=>"articles_by_category.php"
                );
 /****************************************************************************/             
                if(isset($pages[$default_page])){
                    include "modules/" . $pages[$default_page];
                }
/*****************************************************************************/
            ?> 
          
           </div>
            <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
         <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('.dataTables-example').dataTable();
            });
    </script>
</body>
</html>
