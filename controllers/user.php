<?php 

//Lo recomendable es crear metodos con acciones

class UserController{
    public function getAll(){
        require_once  "models/user.php";
        $user  = new User();
        $all_users  = $user->getAll();
        //SI funciona hasta aqui
        require_once "views/users/view_all.php";

    }
    public function create() {
        require_once "views/users/create.php";
    }
    
}


?>