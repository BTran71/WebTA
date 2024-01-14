<?php 
    session_start();
    //ob_start();
    include 'model/connectdb.php';
    include "view/headerhv.php";
    include "model/admingv.php";
    include "model/adminhv.php";
    include "model/user.php";
   // $_SESSION['id'] = $user_id;
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'dangxuat':
                unset($_SESSION['role']);
                unset($_SESSION['user']);
                unset($_SESSION['id']);
                header('location:index.php?act=dangnhap');  
                break;
            case 'bh':
                //$bhct=$_SESSION['id'];
                $bhct=getone_baihoc($_SESSION['id']);
                include "view/lesson.php";  
                break;
            case 'chitietbh':
                $bh=getbh($_GET['idbh']);
                include "view/chitietbaihoc.php";  
                break;
            case 'tkb':
                $tkb=gettkb($_SESSION['id']);
                include "view/tkb.php";  
                break;
            case 'thongtin':
                //$bhct=$_SESSION['id'];
                $ngct=getone_ng($_SESSION['id']);
                include "view/thongtin.php";  
                break;
            case 'ng_update':
                if(isset($_POST['capnhatng'])&&($_POST['capnhatng'])){
                    $ngct=getone_ng($_SESSION['id']);
                    include "view/updatett.php";
                }
                break;
            case 'update':
                if(isset($_POST['capnhatnghv'])&&($_POST['capnhatnghv'])){
                    $id=$_POST['ma'];
                    $name=$_POST['hoten'];
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    if ((kiem_tra($name)==true)){
                        update_ng($id,$name,$email,$user,$pass);
                    }
                    }
                    $ngct=getone_ng($id);
                    include "view/thongtin.php";
                    break;   
        }
    }
?>