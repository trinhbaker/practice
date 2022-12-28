<?php
class student
{
    public $name;
    public $tacgia;
    private $dienvien;
    private $Thoigian;
    public function setdienvien($value)
    {if ($value > 1){
            $this->dienvien = $value;
    } else{
        echo "Số diễn viên phải lớn hơn 0.";
    }
   }
    public function getdienvien()
    {
        return $this->dienvien;
    }
    public function setthoigian($x)
    {
        if ($x >= 60) {
            $this->thoigian = $x;
        } else {
            echo "Thời gian ít nhất 60 phút.";
        }
    }
    public function getthoigian()
    {
        return $this->thoigian;
    }
};
