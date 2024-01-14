<?php 
    function getall_ct(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM chuongtrinh");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function getct_one($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM chuongtrinh inner join lop on chuongtrinh.id=lop.idct inner join tkb on tkb.idlop=lop.id
        where chuongtrinh.id='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function gettkb($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM tkb inner join lop on 
                 lop.id=tkb.idlop inner join hocvien on hocvien.idlop=lop.id where hocvien.id='".$id."' order by thu asc,bd asc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
?>