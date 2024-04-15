<?php
    class clsKetNoi{
        public function moketnoi(){
            return mysqli_connect('localhost','root','','toan2');
        }

        public function dongketnoi($con){
            $con->close();
        }
    }
?>