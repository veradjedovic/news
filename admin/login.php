<?php
require 'config.php';
if(isset($_POST['admin_username']) && isset($_POST['admin_password'])){
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];
    
    $admin_username = htmlspecialchars($admin_username);
    $admin_password = htmlspecialchars($admin_password);
    
    $admin_username = str_replace("'","",$admin_username);
    $admin_password = str_replace("'","",$admin_password);
    $admin_password = md5($admin_password);
    
  
    $admin = Admin::login($admin_username, $admin_password);
    
    if($admin){
        
	header("location: home.php");
    } else {
	echo "Neposotjeci korisnik <br>";
        echo "<a href='index.php'>Pokusajte ponovo</a>";
    } 
}
/*    
$admins = Admin::get($_SESSION['admin_id']);
        //print_r($admins);
        foreach ($admins as $a){ 
           echo $a[0];
        }
        
        $curdate = new DateTime('l');
        $curdate = $curdate->format('d M Y');
        $admin = new Admin();
        $admin->admin_id = $a[0];
        $admin->admin_last_seen = $curdate;
        $admin->save();             

       */          
                 