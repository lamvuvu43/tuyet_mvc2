<?php

class ProductController
{
    function __construct()
    {
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
        if ($action == 'logout')
            $this->logout();
    }

    //cac action - public
    function index()
    {
        $model = new ProductModel();
        $data = $model->random(4);
        include('./theme/index.php');
    }

    function list()
    {
        echo 'Noi dung action list';
        $model = new ProductModel();
        $dataProduct = $model->all();

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
        $id = $_GET['id'];
        $model = new ProductModel();
        $data = $model->detail($id);
        include('./theme/detail.php');
    }

    function filter()
    {
        $q = isset($_GET['q']) ? $_GET['q'] : '';
        $model = new ProductModel();
        $dataProduct = $model->filter($q);

        //send dataProduct cho view/prodcut/list
        include 'view/product/list.php';
    }

    function Buy(){
        $sql = "insert into ";
    }

    public function logout(){
        session_start();
        $_SESSION['login.email'] =  null;
        $_SESSION['login.name'] =  null;
        header("Location:". url());
    }
}
