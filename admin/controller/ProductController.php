<?php
class ProductController {
    function __construct()
    {
        $action=isset($_GET['action'])?$_GET['action']:'index';
        echo "action= $action";
        if ($action=='index')
            $this->index();

        if ($action=='list')
            $this->list();

        if ($action=='byCat')
            $this->byCat();
        if ($action=='detail')
            $this->detail();
        if ($action=='filter')
            $this->filter();
        if ($action=='store')
            $this->store();
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
        $model = new ProductModel();
        $dataProduct= $model->all();
        // $this->dd($dataProduct);

        $dataCat = $model->Category();
        $dataPub = $model->Publisher();
       include './view/product/index.php';
    }

    function list()
    {
        echo 'Noi dung action list';
        $model = new ProductModel();
        $dataProduct= $model->all();

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
        $data=$m->detail($id);
       // print_r($data);
       include './view/product/detail.php';
    }

    function filter()
    {
        $q = isset($_GET['q'])?$_GET['q']:'';
        $model = new ProductModel();
        $dataProduct= $model->filter($q);

        //send dataProduct cho view/prodcut/list
        include 'view/product/list.php';
    }

    function store()
    {
        // print_r($_POST);
        // print_r($_FILES);
        $model = new ProductModel();
        $model->save();
        header('location:index.php?controller=ProductController');
    }
}
