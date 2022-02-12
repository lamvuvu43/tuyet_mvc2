<?php
class ProductModel extends DbModel
{
    function all()
    {
        return $this->select('select * from book');
    }

    function random($n=3)
    {
        return $this->select("select * from book order by rand() limit 0, $n");
    }

    function detail($id)
    {
        $sql="select * from book where book_id=?";
        $data = $this->select($sql, [$id]);
        return $data[0];
    }

    function filter($q)
    {
        $sql="select * from book where book_name like ? ";
        $param =["%$q%"];
        return $this->select($sql, $param);
    }

    function Category()
    {
        return $this->select('select * from category');
    }

    function Publisher()
    {
        return $this->select('select * from publisher');
    }
    /**
     * ham save book to db
     */
    function save()
    {
      //  sql ="insert into book (book_id, book_name, price, decription, img, cat_id, pub_id) "
     $sql=" INSERT INTO `book` (`book_id`, `book_name`, `description`, `price`, `img`, `pub_id`, `cat_id`)
         VALUES (?, ?, ?, ?, ?, ?, ?) ";
     $book_id = $_POST['book_id'];
     $book_name=$_POST['book_name'];
     $price=$_POST['price'];
     $description = $_POST['description'];
     $cat_id=$_POST['cat_id'];
     $pub_id=$_POST['pub_id'];
     $img = time().'-'. $_FILES['img']['name'];
     $param=[$book_id, $book_name, $description, $price, $img, $pub_id, $cat_id ];
     $this->store($sql, $param);

     move_uploaded_file($_FILES['img']['tmp_name'], "../image/book/$img");
    }

    public function deleteBook($id)
    {
        $sql = 'delete from book where book_id = ?';
        return $this->delete($sql, [$id]);
    }
}
