<?php

class UserController
{
    private $model;

    function __construct()
    {
        $this->model = new UserModel();
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';
        if ($action == 'index')
            $this->index();

        if ($action == 'list')
            $this->list();
        if ($action == 'byCat')
            $this->byCat();
        if ($action == 'detail')
            $this->detail();
        if ($action == 'filter')
            $this->filter();
        if ($action == 'store')
            $this->store();
        if ($action == 'delete') {
            $this->deleleBook();
        }
        if($action == 'login'){
            $this->login();
        }
    }

    function dd($result)
    {
        echo '<pre>';
        print_r($result);
        die();
    }

    //cac action - public
    function index()
    {
        $this->model = new UserModel();
        $dataUser = $this->model->all();
        include '../view/template.php';
    }

    function list()
    {
        echo 'Noi dung action list';
        $this->model = new UserModel();
        $dataProduct = $this->model->all();

        //send dataProduct cho view/prodcut/list
        include 'view/product/list.php';
      //  print_r($dataProduct);

    }

    function byCat()
    {
        echo 'Noi dung action bycart';
    }

    function detail()
    {
        //echo "Detail...";
        //lay id
        //load Model
        //lay thong tin chi tiet cua sach co id...
        //loadView tuong ung
        $id = $_GET['id'];
        $m = new UserModel();
        $data = $m->detail($id);
        // print_r($data);
        include './view/product/detail.php';
    }

    function filter()
    {
        $q = isset($_GET['q']) ? $_GET['q'] : '';
        $this->model = new UserModel();
        $dataProduct = $this->model->filter($q);

        //send dataProduct cho view/prodcut/list
        include 'view/product/list.php';
    }

    function store()
    {
        $this->model->save();
        if(isset($_POST['from'])){
            $this->login();
        }else{
            header('location:index.php?controller=UserController');
        }

    }

    public function deleleBook()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $this->model->deleteBook($id);
        header('location:index.php?controller=ProductController');
    }

    public function login()
    {
        session_start([
            'cookie_lifetime' => 86400,
        ]);
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->selectUser($email, $password);
        if (!empty($user)) {
            $_SESSION['login.email'] = $user[0]['email'];
            $_SESSION['login.name'] = $user[0]['name'];
        }
        header("Location:". url());
    }
}
