<?php
// Xây dựng form(sử dụng phương thức get) truyền vào 2 số a, b
// Yêu cầu
// Hiển thị ra tất cả các số chẵn và số nguyên tố từ 1 -> a
// Hiển thị ra tất cả các số lẻ và số chính phương 0 -> b
// Khai báo mảng
// C1
// $tên mảng = array();
// C2
// $tên mảng = [];
//$arrayTT = [2,3,4,5,6];
//// Hiển thị mảng
echo "<pre>";
//print_r($arrayTT);
//// Duyệt mang
//echo $arrayTT[2];
// dùng vòng lap de duyet mang
// for -> chỉ có su dung cho mang 1 chiều
// foreach -> duyet duoc tất cả các mảng
// mảng liên hợp
// Key mình từ viết
// Khai báo mảng liên hợp
$arrayLH = ["A"=>7, "B"=>"C", "DDD"=>8];
print_r($arrayLH);
echo $arrayLH["DDD"];
// Hàm
// Hàm dùng để đóng gói 1 chức năng trong chuong trinh
// giúp code gọn gàng, tái sử dụng
// tìm xem số mà tôi có là số chẵn hay số lẻ
$a = 5;
$b = 6;
// khai báo hàm
// Hàm có trả về => là hàm có chứa retunr
// Hàm không trả về => là hàm không có chứa retunr
function ktSoChanLe($a){
    // Làm thế nào để biết hàm có tham số hay không???
    // Chúng hình vaào cái ngoặc () trên hàm
    // Nếu trên đó có chứa bất cứ biến nào
    // Thì hàm đó được gọi là hàm có tham số
    // 1 hàm có thể có bao nhiêu tham số
    // 1 hàm có thể vô số tham số miễn sao chúng các bằng
    // 1 dấu phẩy ","
    if($a % 2 == 0){
        echo "Cửa chẵn";
    }else{
        echo "Cửa lẻ";
    }
}
// Muốn hàm nhớ là gọi hàm ra
// Nếu là hàm không trả về thì cứ gọi thẳng ra
// Nếu là hàm có trả về khi gọi ra cần 1 biến để nhận
// giá trị maf hàm tra về nếu k thì phải sử dụng ngay
// Lưu ý: Nếu là hàm có tham số thì hàm chứa bao tham soos thì
// chuyền vào bấy nhiêu giá trị
ktSoChanLe($a);
// Xây dựng 1 hàm không tra về và co nhưng tham so sau
// ten, nam sinh, gioi tinh, dia chi, SCMT, SDT
// Xử lý tinh tính tuổi của dự liệu được nhập vao
// và hiện thị thông tin sau
// ten, tuoi, gioi tinh, dia chi, SCMT, SDT
// hiển them kết luận người đó đủ tuổi kết hôn hay chưa
// Lưu ý: Dự vào phát luật hiện hành
?>