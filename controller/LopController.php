<?php

class LopController
{
    public function  index(): void
    {
        require 'model/Lop.php';
        $arr = (new Lop())->all();
        require 'view/lop/index.php';
    }
    public function create()
    {
        require'view/lop/create.php';
    }
    public function store()
    {
        $phong = $_POST['phong'];
        $ten = $_POST['ten'];

        require 'model/Lop.php';
        (new Lop())->create($phong, $ten);
    }
    public function edit()
    {
        $ma = $_GET['ma'];
        require 'model/Lop.php';
        $each = (new Lop())->find($ma);
        require 'view/lop/edit.php';
    }
    public function update()
    {
        $ma = $_POST['ma'];
        $phong = $_POST['phong'];
        $ten = $_POST['ten'];

        require 'model/Lop.php';
        (new Lop())->update( $ma ,$phong, $ten);
    }
    public function delete()
    {
        $ma = $_GET['ma'];
        require 'model/Lop.php';
        (new Lop())->destroy( $ma);
    }
}