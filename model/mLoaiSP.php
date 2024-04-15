<?php 
    include_once("ketnoi.php");
    class MLoaiSP{
        public function SelectAllLSP(){
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset("utf8");    
            if($con){
                $str = "select * from thuonghieu";
                $tblLSP = $con->query($str);
                $p->dongketnoi($con);//close
                return $tblLSP;
            }else {
                return false;
            }
        }

    }
?>