<?php 
    include_once("model/mSanpham.php");
    class CSanpham{
        public function getAllSP(){
            $p = new mSanpham();
            $tblSP = $p->SelectAllSP();
            if(!$tblSP){
                return -1;
            }else {
                if($tblSP->num_rows > 0){
                    return $tblSP;
                } else {
                    return 0;//Là không có dòng dữ liệu
                }
            }
            
        }
        public function getAllthuonghieu($MaCuocThi){
            $p = new mSanpham();
            $tblLSP = $p-> SelectAllSPthuonghieu($MaCuocThi);
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

        public function getAllsearch($TenCuocThi){
            $p = new mSanpham();
            $tblLSP = $p->selectAllSPSearchByTen($TenCuocThi);
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
        public function getAllsearchnam($Nam){
            $p = new mSanpham();
            $tblLSP = $p->SelectAllSPSearchbynamduthi($Nam);
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