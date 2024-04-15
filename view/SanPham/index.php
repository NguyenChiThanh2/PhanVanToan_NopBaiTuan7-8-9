<?php 

    include("controller/cSanpham.php");
    $p = new CSanpham();
    if(isset($_REQUEST["MaCuocThi"])) {
        $tblSP = $p->getAllthuonghieu($_REQUEST["MaCuocThi"]);
    } else if(isset($_REQUEST["search"])){
        $tblSP =$p ->getAllsearch($_REQUEST["search"]);
        $tblSP =$p ->getAllsearchnam($_REQUEST["search"]);
  
    }
    
    else {
        $tblSP = $p->getAllSP();
    }

    //$tblSP =  $p -> getAllSP();


    if($tblSP === -1){
        echo "error";
    } elseif(!$tblSP){
        echo "0 result";
    } else {
        echo "<table border='1' style='text-align:center' width='100%'>";
        echo "<caption> <h2>DANH SÁCH MỸ NHÂN</h2> </caption>";
        echo "<tr>";
        $dem =0;
        while($r = $tblSP->fetch_assoc()){
            echo '<td><img src="img/'.$r["Ảnh"].'" width="70px">'.'<br>';
            echo $r["Name"]."<br>";
            echo $r["Thành Tích"]."<br>";
            echo "</td>";
            $dem++;
            if($dem%4==0){
                echo "</tr><tr>";
            }
        }
       
        echo "</tr>";
        echo "</table>";
    }
?>