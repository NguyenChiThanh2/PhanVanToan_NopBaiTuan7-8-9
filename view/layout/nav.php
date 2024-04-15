<div class="section">
            <div class="nav">
                
                <h2>Menu</h2>
                <table>
                    <tr>
                        <td>
                        
                    <a href="">Trang chủ</a>
                    <a href="./Ql.php"> Quản Lý</a>
                
                        </td>
                    </tr>
                </table>
            
                <?php
                  include_once("controller/cLoaiSanpham.php");
                  $p = new CLoaiSanpham();
                  $tblSP = $p->getAllLSP();
                  if ($tblSP === -1) {
                      echo "error";
                  } elseif (!$tblSP) {
                      echo "0 result";
                  } else {
                      echo '<h4 class="brand" style="padding:20px"> <a style="text-decoration:none" href="index.php">Tất Cả</a> </h4>'.'<br>';
                      $dem = 0;
                      
                      while ($r = $tblSP->fetch_assoc()) {
                          echo "<h4 class='brand' style='padding:20px'><a style='text-decoration:none' href='index.php? MaCuocThi=".$r["MaCuocThi"]."'>".$r["TenCuocThi"]."</a></h4>" . "<br>";
                      }
                      echo '</td>'; // Đóng thẻ <td> cho cột đầu tiên
                  }
                ?>
            </div>
