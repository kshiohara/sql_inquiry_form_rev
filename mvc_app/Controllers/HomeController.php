<?php
require_once ROOT_PATH.'Controllers/Controller.php';

require_once ROOT_PATH.'Controllers/UserController.php';

// お問合せ
require_once ROOT_PATH.'Controllers/ContactController.php';

class HomeController extends Controller
{
    public function index(){
        $user = new UserController();
        $auth = $user->getAuth();
        $this->view('home/index', ['auth' => $auth]);
    }
}
