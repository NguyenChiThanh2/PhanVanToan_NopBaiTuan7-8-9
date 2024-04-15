<?php 
    include_once("ketnoi.php");
    class MSanpham{
        public function SelectAllSP(){
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset("utf8");    
            if($con){
                $str = "select * from sanpham ";
                $tblSP = $con->query($str);
                $p->dongketnoi($con);//close
                return $tblSP;
            }else {
                return false;//Không thể kết nối đến CSDL
            }
        }
            public function SelectAllSPthuonghieu($MaCuocThi){
                $p = new clsKetNoi();
                $con = $p->moketnoi();   
                if($con){
                    $str = " SELECT * FROM sanpham WHERE MaCuocThi  = '$MaCuocThi'";
                    $tblSP = $con->query($str);
                    $p->dongketnoi($con);//close
                    return $tblSP;
                }else {
                    return false;//Không thể kết nối đến CSDL
                }
            }
        public function SelectAllSPSearchbyten($TenThiSinh){
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset("utf8");    
            if($con){
                $str = " SELECT * FROM sanpham WHERE Name LIKE '%$TenThiSinh%' ";
                $tblSP = $con->query($str);
                $p->dongketnoi($con);//close
                return $tblSP;
            }else {
                return false;//Không thể kết nối đến CSDL
            }
        }
        public function SelectAllSPSearchbynamduthi($Nam){
            $p = new clsKetNoi();
            $con = $p->moketnoi();
            $con->set_charset("utf8");    
            if($con){
                $str = "SELECT * FROM `sanpham` WHERE `Năm Dự Thi`= $Nam ";
                $tblSP = $con->query($str);
                $p->dongketnoi($con);//close
                return $tblSP;
            }else {
                return false;//Không thể kết nối đến CSDL
            }
        }
        
    }
?>