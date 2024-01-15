<?php
class SinhVien{
//    Khai báo thuoc tính
// Khai báo thêm 5 thuộc tính
    public $maSV;
    public $tenSV;
    public $namSinh;
    public $maCC;
//    Khai báo phương thức
// Khai báo phương thức khởi tạo
    public function __construct($maSV, $tenSV, $namSinh, $maCC)
    {
//      Class có bao nhiêu thuộc tính thì phương thức
        // đó có bấy nhiêu tham số và tương ứng với từng
        // thuộc tính
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
        $this->namSinh = $namSinh;
        $this->maCC = $maCC;

    }

// Ham set -> nhập giá trị vào cho thuộc tính
    public function setTenSV($tenSV){
        $this->tenSV = $tenSV;
    }

//  Viết 1 phương thức tính tuổi (không có tham số và có trả về)
    public function tinhTuoi(){
        return Date('Y') - $this->namSinh;
    }
    public function hienThiThongTin(){
        // nếu muốn dùng thuộc tính hay phương thức
        // hãy nhớ đến từ khóa $this
        echo $this->tenSV;
        echo $this->maSV;
        echo $this->namSinh;
        echo $this->maCC;
        echo $this->tinhTuoi();
    }
}
// Khởi tạo đối tượng
$sv = new SinhVien("PH123","Nguyen Van A", 2004, "000000001" );
//$sv->maCC = "PH12345";
$sv->setTenSV("Nguyen Thành Trung");
$sv->hienThiThongTin();
