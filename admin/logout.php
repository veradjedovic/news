<?php
require 'config.php';
 $admins = Admin::get("1");
 //print_r($admins);
  foreach ($admins as $a){ 
        $a[0];
     }
  $curdate = new DateTime('l');
  $curdate = $curdate->format('d M Y H:i');
  $admin = new Admin();
  //$admin->admin_id = $a[0];
  //$admin->admin_last_login = $curdate;
  //$admin->save();


Admin::logout();
header("location: index.php");