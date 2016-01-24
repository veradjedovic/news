<?php
class Admin extends ActiveRecord{
    public static $table = "administrators";
    public static $key = "admin_id";
    
    public function setSessions(){
        Session::set("admin_id", $this->admin_id);
        Session::set("admin_name", $this->admin_username);
        Session::set("admin_status", $this->admin_status);
    }
    public static function logout(){
        Session::stop();
    }
    public static function login($admin_username,$admin_password){
        $admins = self::getAll("where admin_username='{$admin_username}' and admin_password='{$admin_password}' limit 1");
        if(count($admins)==1){
            $admins[0]->setSessions();
            return $admins[0];
        }else{
            return null;
        }
        
    }
}