<?php
    include_once("controller/cLoaiSanpham.php");
    $p= new CLoaiSanpham();
    $tblSP = $p->getAllLSP();
    if($tblSP == -1){
        echo "error";
    }elseif(!$tblSP){
        echo "0 result";
    }else{
        while($r = $tblSP->fetch_assoc()){
            echo $r["MaCuocThi"]."-".$r["TenCuocThi"] ."<br>";
        }

    }
?>