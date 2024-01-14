<?php 
    session_start();
    ob_start();
    include 'model/connectdb.php';
    include "model/chuongtrinh.php";
    include "model/user.php";
    include "view/header.php";
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'chuongtrinh':
                $kq=getall_ct();
                include "view/chuongtrinhhoc.php";
                break;
            case 'dangnhap':
                include "view/dangnhap.php";
                break;
            case 'login':
                if(isset($_POST['login'])&& ($_POST['login'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $role=checkuser($user,$pass);
                    $_SESSION['role']=$role;
                    $info=getuser_info($user,$pass);
                    if($role==1){
                        $_SESSION['role']=$role;
                        header('location:indexadmin.php'); 
                    }
                    else if($role==2){
                        
                        $_SESSION['role']=$role;
                        $_SESSION['id']=$info[0]['id'];
                        $_SESSION['user']=$info[0]['user'];
                        header('location:indexhv.php'); 
                    }
                    else {
                        $txt_error="Nhập sai tài khoản hoặc mật khẩu"; 
                        include "view/dangnhap.php";
                    }
                }
                //include "view/dangnhap.php";
                break;
            case 'dangkyform':
                $name=$_POST['hoten'];
                $email=$_POST['email'];
                $sdt=$_POST['sdt'];
                $tinh=$_POST['tinh'];
                if(isset($_POST['dangky'])&& ($_POST['dangky'])){
                    dangkyhoc($name,$email,$sdt,$tinh);
                }
                include "view/home.php";
                break;
            case 'chitietct':
                $ct=getct_one($_GET['id']);
                include "view/chitietct.php";  
                break;
            default:
                # code...
                break;
        }
    }
    else{include "view/home.php";}
    include "view/footer.php";

?>