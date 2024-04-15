<?php
include_once('ketnoi.php');

class MQuanLiTable{
    public function selectAllTables(){
        $p = new clsKetNoi();
        $con = $p->moKetNoi();
        if($con){
            $str = "SHOW TABLES;";
            $tblSP = $con->query($str);
            $p->dongKetNoi($con);
            return $tblSP;
        } else {
            return false; 
            //khong the ket noi den csdl
        }
    }
}

// Tạo một đối tượng mới của lớp MQuanLiTable
$tableManager = new MQuanLiTable();

// Gọi phương thức selectAllTables() để lấy tất cả các bảng từ CSDL
$tables = $tableManager->selectAllTables();

// Kiểm tra xem có kết quả trả về hay không
if ($tables !== false && $tables->num_rows > 0) {
    // Duyệt qua các bảng và hiển thị chúng
    echo "<ul>";
    while ($row = $tables->fetch_row()) {
        echo "<li>" . $row[0] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Không thể lấy danh sách các bảng từ CSDL hoặc không có bảng nào.";
}
?>