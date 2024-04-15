<?php 
    include_once("model/mLoaiSP.php");
    class CLoaiSanpham{
        public function getAllLSP(){
            $p = new MLoaiSP();
            $tblLSP = $p->SelectAllLSP();
            if(!$tblLSP){
                return -1;
            }else {
                if($tblLSP->num_rows > 0){
                    return $tblLSP;
                } else {
                    return 0;//Là không có dòng dữ liệu
                }
            }
            
        }

       

    }
?>