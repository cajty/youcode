<?php 
include("./Model/User.php")
class UerController  {
  

    public function listUsers() {
        $user = new UserModel();
        $users = $user->getUer();
    
        include_once ("./View/dashboard.php");
    }



?>