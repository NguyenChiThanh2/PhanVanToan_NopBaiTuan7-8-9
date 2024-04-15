<?php 

    include("controller/cLoaiSanpham.php");
    $p = new cLoaiSanpham();
    $tblLSP =  $p->getAllLSP();
    if($tblLSP === -1){
        echo "error";
    } elseif(!$tblLSP){
        echo "o result";
    } else {
        echo "<table border='1' style='text-align:center;' width='100%'>";
        echo "<h2>Danh mục Thương hiệu</h2>";
        echo "<tr>";
                echo"<td> MaCuocThi</td>";
                echo"<td> TenCuocThi </td>";
        echo "</tr>";
        $dem =0;
        while($r = $tblLSP->fetch_assoc()){
            echo "<tr>";
            echo  "<td>".$r["MaCuocThi"]."</td>";
            echo  "<td>".$r["TenCuocThi"]."</td>";
            $dem++;
            if($dem%4==0){
                echo "</tr><tr>";
            }
        }
        echo "</tr>";
        echo "</table>";
    }
?>