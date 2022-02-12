<?php


class UserModel extends DbModel
{
    function all()
    {
        return $this->select('select * from users');
    }

    function random($n=3)
    {
        return $this->select("select * from users order by rand() limit 0, $n");
    }

    function detail($id)
    {
        $sql="select * from users where book_id=?";
        $data = $this->select($sql, [$id]);
        return $data[0];
    }

    function filter($q)
    {
        $sql="select * from users where book_name like ? ";
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
     * ham save users to db
     */
    function save()
    {
        //  sql ="insert into users (book_id, book_name, price, decription, img, cat_id, pub_id) "
        $sql = " INSERT INTO `users` (`email`, `password`, `name`, `address`, `phone`)
         VALUES (?, ?, ?, ?, ?) ";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $param = [$email, $password, $name, $address, $phone];
        $this->store($sql, $param);
    }

    public function deleteBook($id)
    {
        $sql = 'delete from users where book_id = ?';
        return $this->delete($sql, [$id]);
    }

    public function selectUser($email, $password)
    {
        $sql = "select * from  users where email = ? and password = ?";
        return $this->select($sql, [$email, $password]);
    }
}
