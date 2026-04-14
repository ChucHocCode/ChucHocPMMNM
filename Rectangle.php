<?php

class Retangle{
    public $dai;
    public $rong;
    public function tinhChuVi(){
        return ($this->dai +$this->rong) *2;
    }


    //Tinh dien tich
    public function tinhDienTich(){
        return $this->dai * $this->rong;
    }
}

//tao object ben ngoai class
$hcn =new Retangle();
$hcn->dai=10;
$hcn->rong=5;


//In ket qua
echo "Dien tich : " .$hcn->tinhDienTich() . "-Chu Vi: " .$hcn->tinhChuVi();
?>