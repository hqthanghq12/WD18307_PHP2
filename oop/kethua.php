<?php
class ConNguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function __construct($chan, $tay, $mat, $mui)
    {
        $this->chan = $chan;
        $this->tay = $tay;
        $this->mat = $mat;
        $this->mui = $mui;
    }

    public function an(){
        echo "Bang mieng";
    }
}
class NguoiLon extends ConNguoi {
    // Khai bao class NguoiLon
// Có những thuoc tinh sau
// tay, chan, mat, mui, longnach
// Có những phương thuc sau
// di() -> di chuyen
// an() -> bằng mieng
// ngu() -> tuy cả nhà
    public $longNach;
    public function __construct($chan, $tay, $mat, $mui, $longNach)
    {
        parent::__construct($chan, $tay, $mat, $mui);
        $this->longNach =$longNach;
    }

    // Phuong thuc
    public function di(){
        echo $this->tay;
         $this->an();
        echo "Di chuyen";
    }
    public function ngu(){
        echo "Tren san/phong khach";
    }
}
class TreCon extends NguoiLon {
//     Khai báo class TreCon
//     Co nhung thuoc tinh sau
//     tay, chan, mat, mui
//     Có những phương thuc sau
//     bo() -> Bang tat ca nhưng gi có
//     an() -> bằng mieng
//     Khai bao thuoc tinh
//    Khai bao phuong thuc
    public function bo(){
        echo $this->tay;
        echo "Bang tat ca nhung gi co";
    }
}
