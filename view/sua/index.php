<?php
include_once('cls/edit.php');
$p = new update();
$conn = new mysqli('localhost', 'TOAN', '110103', 'ctsd');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    include_once("controller/cQLSP.php");
    $obj = new CSanPhamQuanLi();
    $result = $obj->getbyID($_GET['id']);
    $row = $result->fetch_assoc();
      

if(isset($_POST['btnthem'])) {
    $Mact = $_POST['txtmct'];
    $Tents = $_POST['txttents'];
    $ThanhTich = $_POST['txtthanhtich'];
    $id = $_REQUEST['id'];

    if ($Mact != '' && $Tents != '' && $ThanhTich != '') {
        if (!empty($_FILES['fileanh']['name'])) {
            $file = $_FILES['fileanh'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png');

            if (in_array($fileActualExt, $allowed)) {
                $fileNameNew = time() . "." . $fileActualExt;
                $fileDestination = 'img/' . $fileNameNew;
                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    $str = "UPDATE `sanpham` SET `MaCuocThi`='$Mact',`Name`='$Tents',`Thành Tích`='$ThanhTich',`Ảnh`='$fileNameNew' WHERE ID = $id";
                    if ($conn->query($str) === TRUE) {
                        if ($conn->affected_rows > 0) {
                            echo "<script>alert('Sửa Thông Tin thí sinh thành công!');</script>";
                        } else {
                            echo "<script>alert('Không Sửa được !');</script>";
                        }
                    } else {
                        echo "Lỗi khi Sủa thí sinh: " . $conn->error;
                    }
                } else {
                    echo '<h4 class="err">Lỗi khi di chuyển file đến thư mục đích.</h4>';
                }
            } else {
                echo "Chỉ được upload ảnh với định dạng JPG, JPEG, PNG.";
            }
        } else {
            echo 'Chưa tải ảnh lên!';
        }
    } else {
        echo "Vui lòng nhập đủ thông tin!!!";
    }
}
$conn->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sửa Sản Phẩm </title>
</head>

<body>
    <h3 align="center"> Sửa Sản Phẩm</h3>
    <form method="post" enctype="multipart/form-data" name="form1" id="form1">
        <div style="text-align: center">
            <p>Mã Cuộc Thi
               <select name="txtmct" id="txtmct">   
               <option value="">-Mã Cuộc Thi-</option>
                <option value="MS"> Miss Supranationa</option>
                <option value="MG"> Miss Grand</option>
                <option value="MU"> Miss Universe</option>
                <option value="MI"> Miss International</option>
                <option value="ME"> Miss Supranational</option>
                <option value="MW"> Miss World</option>
               </select>
            </p>
            <p>
                <label for="txttents">Tên Thí Sinh</label>
                <input type="text" name="txttents" id="txttents" value='<?php echo $row['Name'] ?>'>
            </p>
            <p>
                <label for="txtthanhtich">Thành Tích</label>
                <input type="text" name="txtthanhtich" id="txtthanhtich" value='<?php echo $row['Thành Tích'] ?>'>
            </p>
            <p>
                <label for="fileanh">Ảnh:</label>
                <input type="file" name="fileanh" id="fileanh" value='<?php echo $row['Ảnh'] ?>'>
            </p>
            <p>
                <input type="submit" name="btnthem" id="btnsua" value="Sửa">

            </p>
        </div>
    </form>
</body>
</html>
