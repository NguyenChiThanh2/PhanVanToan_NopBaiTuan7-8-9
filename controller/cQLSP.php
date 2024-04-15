<?php
        include_once('model/mQLSP.php');
        class CSanPhamQuanLi{
            public function getAllSPthuonghieu(){
                $p= new MSanPhamQuanLI();
                $tblSP = $p->selectAllSPthuonghieu();
                if(!$tblSP){
                    return -1;
                }else{
                    if($tblSP->num_rows >0)
                        return $tblSP;
                    else
                        return 0; //la 0 co dong du lieu
                }
            }

            public function getAllSPTenCuocThi(){
                $p= new MSanPhamQuanLI();

                $tblSP = $p->selectAllSTencuocthi();
                if(!$tblSP){
                    return -1;
                }else{
                    if($tblSP->num_rows >0)
                        return $tblSP;
                    else
                        return 0; //la 0 co dong du lieu
                }
            }
            public function getAllSByQLthuonghieu($MaCuocThi){
                $p= new MSanPhamQuanLI();

                $tblSP = $p->selectAllSPByQLthuonghieu($MaCuocThi);
                if(!$tblSP){
                    return -1;
                }else{
                    if($tblSP->num_rows >0)
                        return $tblSP;
                    else
                        return 0; //la 0 co dong du lieu
                }
            }

            public function getAllSBySearchTen($TenCuocThi){
                $p= new MSanPhamQuanLI();

                $tblSP = $p->selectAllSPSearchByTen($TenCuocThi);
                if(!$tblSP){
                    return -1;
                }else{
                    if($tblSP->num_rows >0)
                        return $tblSP;
                    else
                        return 0; //la 0 co dong du lieu
                }
            }
            public function deleteSP($id){
                $p= new MSanPhamQuanLI();

                $result = $p->DeleteSP($id);
                if (!$result) {
                    return -1; // Lỗi xảy ra khi xóa sản phẩm
                } else {
                    return $result ? 1 : 0; // Trả về 1 nếu xóa thành công, 0 nếu không có dữ liệu bị ảnh hưởng
                }
            }
            public function getbyID($id){
                
                $p = new MSanPhamQuanLi();
     
                $tblSP = $p->selectsanphambyID($id); 
          
                if(!$tblSP){
                    return -1; 
                } else {
                    if($tblSP->num_rows > 0)
                        return $tblSP; 
                    else
                        return 0; 
                }
            }
        }

    ?>