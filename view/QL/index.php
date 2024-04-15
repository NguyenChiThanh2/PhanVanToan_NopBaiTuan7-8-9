
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">
        a{
            display:inline-block;
            border:1px solid #73AD21;
            background-color:#73AD21;
            padding:10px 12px;
            box-shadow:2px 2px 5px #6c6969;
            text-decoration:none;
            border-radius:3px;
            color:white;
        }
        a:hover{
            border:1px solid #90d331;
            background-color:#90d331;
        }
        a:active{
            border:1px solid #669f15;
            background-color:#669f15;
        }
    </style>
<body>
<?php
    include_once("controller/cQLSP.php");
    $p = new CSanPhamQuanLi();

// Xử lý khi người dùng nhấn nút Xóa sản phẩm
if(isset($_POST["btXoa"])) {
    $idsp = $_POST["btXoa"];
    $result = $p->deleteSP($idsp);
    if ($result === 1) {
        echo "<script>alert('Xóa sản phẩm thành công')</script>";
        echo "<script>window.location.href = window.location.href;</script>"; // Làm mới trang sau khi xóa thành công
    } elseif ($result === -1) {
        echo "Lỗi xảy ra khi xóa sản phẩm";
    } else {
        echo "Không có sản phẩm được xóa";
    }
}

if(isset($_REQUEST["thuonghieu"])) {
    $tblSP = $p->getAllSPthuonghieu($_REQUEST["thuonghieu"]);
} else if(isset($_REQUEST["search"])){
    $tblSP =$p -> getAllSBySearchTen($_REQUEST["search"]);
}

else {
    $tblSP = $p->getAllSPthuonghieu();
}
    // $tblSP = $p->getAllSP();
    
       
        if($tblSP === -1){
            echo 'error';
        }elseif(!$tblSP){
            echo '0 results';
        }else{
            echo"<form method='post' enctype='multipart/form-data'>
		    <a href='QL.php?page=upload' >Thêm Thí Sinh</a>
	        </form>";
            echo '<table width="80%" align="center" style="text-align:center">
             <h2>Danh sách  Sản Phẩm </h2>

            <tr>
                <td> ID</td>
                <td> MaCuocThi</td>
                <td> Name</td>
                <td>Thành Tích</td>
                <td>Hình Ảnh</td>
               
            </tr>';
            $dem = 0;
            while($r = $tblSP -> fetch_assoc()){    
                echo "<tr>";    
                echo  "<td>".$r["ID"]."</td>";
                echo  "<td>".$r["MaCuocThi"]."</td>";
                echo  "<td>".$r["Name"]."</td>";
                echo  "<td>".$r["Thành Tích"]."</td>";
                echo "<td> <img  src ='img/".$r["Ảnh"]."' width ='50px' style='padding: 10px'>"; 
                echo '<td align="center">
                        <form method="POST" onsubmit="return confirm(\'Bạn có chắc muốn xóa sản phẩm này không?\')">
                            <input type="hidden" name="btXoa" value="'.$r["ID"].'">
                            <button type="submit">Xóa</button>
                        </form>
                      </td>';
                echo '<td align="center">
                        <button>
                          <a href="QL.php?page=sua&id='.$r["ID"].'">Sửa</a>
                        </button>
                        </td>';
                $dem++;     
                // if($dem%4==0){
                //     echo "</tr><tr>";
                // }
                echo "</tr>";   
            }
            echo "</table>";
        
    }
    
        

?>
</body>
</html>
<?php

