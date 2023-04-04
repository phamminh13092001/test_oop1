<?php
 require 'model/Connect.php';
class Lop
{
    private int $ma;
    private string $phong;
    private string $ten;

    public function get_ma()
    {
        return $this->ma;
    }
    public function show_ma()
    {
        return "#".$this->ma;
    }
    public function set_ma($var)
    {
        $this->ma = $var;
    }
    public function get_phong()
    {
        return $this->phong;
    }
    public function set_phong($var)
    {
        $this->phong = $var;
    }
    public function get_ten()
    {
        return $this->ten;
    }
    public function set_ten($var)
    {
        $this->ten = $var;
    }

    public function get_phong_ten()
    {
        return $this->phong . ' - ' . $this->ten;
    }
    public function all()
    {
        $sql = "select * from lop";
        $result = (new Connect())->select($sql);
        $arr = [];
        foreach ($result as $row){
            $object = new self();
            $object->set_ma($row['ma']);
            $object->set_phong($row['phong']);
            $object->set_ten($row['ten']);

            $arr[] = $object;
        }
        return $arr;
    }
    public function create($phong, $ten): void
    {
        $object = new self();
        $object->set_phong($phong);
        $object->set_ten($ten);



        $sql = "insert into lop( phong, ten) 
                values ('{$object->phong}', '{$object->ten}')";
        (new Connect())->excute($sql);
    }


    public function find($ma)
    {
        $sql = "select * from lop
                where ma='$ma'";
        $result = (new Connect())->select($sql);
        $row = mysqli_fetch_array($result);

            $object = new self();
            $object->set_ma($row['ma']);
            $object->set_phong($row['phong']);
            $object->set_ten($row['ten']);
            return $object;
    }
    public function update($ma, $phong, $ten): void
    {
        $object = new self();
        $object->set_ma($ma);
        $object->set_phong($phong);
        $object->set_ten($ten);

        $sql = "update lop set
        phong = '$object->phong',
        ten = '$object->ten'
        where
        ma = '$object->ma'";
        (new Connect())->excute($sql);

    }
    public function destroy($ma): void
    {

        $sql = "delete from lop 
        where
        ma = '$ma'";
        (new Connect())->excute($sql);
    }
}