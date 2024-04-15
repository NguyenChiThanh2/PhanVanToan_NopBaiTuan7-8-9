<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1, h2, h3 {
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }
        table, th, td {
            
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        input[type="search"], input[type="submit"] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .image-container {
            text-align: right;
        }
        .image-container img {
            display: inline-block;
            max-width: 100%;
            height: auto;
        }
        img:hover{
            transform: scale(1.1) ;
        }
        .brand {
            transition: all 0.3s ease;
            color: #333; /* Màu mặc định của văn bản */
        }
        .brand:hover {
            color: blue; /* Màu xanh khi hover */
            transform: scale(1.1); /* Phóng to văn bản khi hover */
        }
        .brand:focus {
            background-color: yellow; /* Màu nền khi được chọn */
            outline: none; /* Loại bỏ viền khi được chọn */
        }
        .tt{
            background-image: url('./img/image.jpg');
           
        }
      
        a{
            display:inline-block;
            border:1px solid #73AD21;
            background-color:#73AD21;
            padding:10px 12px;
            box-shadow:2px 2px 5px #6c6969;
            text-decoration:none;
            border-radius:3px;
            color:white;
        }
        a:hover{
            border:1px solid #90d331;
            background-color:#90d331;
        }
        a:active{
            border:1px solid #669f15;
            background-color:#669f15;
        }
    </style>
    
</head>
<body>
    <table border="1" width="80%" align="center" style="position: relative;">
        <tr class="tt" >
            <td colspan="2">
                <h2>BEAUTY QUEEN</h2>
            </td>
        </tr>
        <tr>
            <td>
            <form action="" method="POST">
                <a href="index.php" name="trangchu">Trang chủ</a>
                <a href="?quanli" name="quanli" style="margin-left: 20px;">Quan Lí</a>
                </form>
            </td>
            
        </td>
        </tr>
        <tr>
            <td width="25%">
                <div >
                <h3><a href="QL.php?page=qlth">Quản lý Thương Hiệu</a></h3>
                <h3><a href="QL.php?page=qlsp">Quản lý sản phẩm</a></h3>
                </div>
            <h3>
              
            </td>
            <td width="75%">
                
            <?php
            if(!isset($_SESSION["dangnhap"])) {
                header('location:view/dangnhap/index.php');
               
            }else {
                echo '<div style="text-align: right;"><button name="dangxuat"><a href="view/dangxuat/index.php" style="color:white;">Đăng Xuất</a></button></div>';
                if(isset($_GET["page"])){
                    
                    if($_GET["page"] == "qlsp"){
                        include_once("view/QL/index.php");
                    }
                    elseif( $_GET["page"]=="upload"){
                        include_once("view/upload/add.php");
                    }elseif( $_GET["page"]=="qlth"){
                        include_once("view/LoaiSP/index.php");
                    }else{
                        include_once("view/sua/index.php");
                    }
                }else{
                   echo' <h1>Trang này dành cho quản trị viên</h1>';
                }
    
            }

        
            ?>
  