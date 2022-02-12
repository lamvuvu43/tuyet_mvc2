<?php

class ProductController
{
    private $model;

    function __construct()
    {
        $this->model = new ProductModel();
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
        $this->model = new ProductModel();
        $dataProduct = $this->model->all();
        //$this->dd($dataProduct);

        $dataCat = $this->model->Category();
        $dataPub = $this->model->Publisher();
//        die(dirname(__FILE__));
        include '../view/template.php';
    }

    function list()
    {
        echo 'Noi dung action list';
        $this->model = new ProductModel();
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
        $m = new ProductModel();
        $data = $m->detail($id);
        // print_r($data);
        include './view/product/detail.php';
    }

    function filter()
    {
        $q = isset($_GET['q']) ? $_GET['q'] : '';
        $this->model = new ProductModel();
        $dataProduct = $this->model->filter($q);

        //send dataProduct cho view/prodcut/list
        include 'view/product/list.php';
    }

    function store()
    {
//         print_r($_POST);
//        print_r($_FILES['img']);

        $this->model->save();
        header('location:index.php?controller=ProductController');
    }

    public function deleleBook()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $this->model->deleteBook($id);
        header('location:index.php?controller=ProductController');
    }
}
