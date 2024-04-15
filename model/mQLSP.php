<?php
    include_once('ketnoi.php');
    class MSanPhamQuanLi{
        public function selectAllSPthuonghieu(){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            if($con){
                $str = "SELECT * FROM sanpham ";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                //khong the ket noi den csdl
            }
            
        }

        public function selectAllSTencuocthi(){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            if($con){
                $str = "SELECT * FROM thuonghieu ";
                
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                //khong the ket noi den csdl
            }
            
        }

        public function selectAllSPByQLthuonghieu($TenCuocThi){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            
            if($con){
                $str = "select * from sanpham where TenCuocThi = $TenCuocThi";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                //khong the ket noi den csdl
            }
            
        }

        public function selectAllSPSearchByTen($TenThiSinh){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            
            if($con){
                $str = "select * from sanpham where 'Tên Thí Sinh' LIKE '%$TenThiSinh%'";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                //khong the ket noi den csdl
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
     
        public function DeleteSP($id){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            if($con){
                $str = "Delete from sanpham where ID='$id'  ";
                
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 
                //khong the ket noi den csdl
            }
            
        }
        public function selectsanphambyID($id = ''){
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
            if($con){
                $str = "SELECT * FROM sanpham where ID = $id";
                $tblSP = $con->query($str);
                $p->dongKetNoi($con);
                return $tblSP;
            }else{
                return false; 

            }
            
        }
        public function suaSanPham($id, $ten, $thanhtich, $thuonghieu,$filename, $MaCuocThi) {
            $p = new clsKetNoi();
            $con = $p->moKetNoi();
    
            if ($con) {

                $sql = "UPDATE `sanpham` SET `MaCuocThi`='$MaCuocThi',`Name`='$ten',`Thành Tích`='$thanhtich',`Ảnh`='$filename' WHERE ID = $id";
                $success = $con->query($sql);
                $p->dongKetNoi($con);
                return $success;
            } else {
                return false; 

            }
        }


 }


?>