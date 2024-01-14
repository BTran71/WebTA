<?php
    function checkuser($user,$pass){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM nguoidung where user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        if(count($kq)>0)
            return $kq[0]['role'];
        else
            return 0;
    }
    function getuser_info($user,$pass){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM nguoidung where user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function dangkyhoc($name,$email,$sdt,$tinh){
        $conn=connectdb();
        $sql = "INSERT INTO dangky (hoten,email,sdt,tinh) values ('$name','$email','$sdt','$tinh')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
?>
