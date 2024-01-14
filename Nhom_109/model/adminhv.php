<?php 
    function getall_hv(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT hocvien.id, tenhv,email,sdt,ngaysinh,tenlop,donghp FROM hocvien inner join lop on lop.id=hocvien.idlop");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function delhv($id){
        $conn=connectdb();
        $sql="DELETE FROM hocvien where id= '".$id."' and donghp=0";
        $conn->exec($sql);
    }
    function update_hv($id,$tenhv,$email,$sdt,$lop,$ngaysinh,$donghp){
        $conn=connectdb();
        $sql = "UPDATE hocvien SET tenhv='".$tenhv."',email='".$email."',sdt='".$sdt."',idlop='".$lop."',ngaysinh='".$ngaysinh."',donghp='".$donghp."' WHERE id='".$id."' AND donghp=0";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function insert_hv($id,$ten,$email,$sdt,$lop,$ngaysinh,$donghp){
        $conn=connectdb();
        $sql = "INSERT INTO hocvien (id,tenhv,email,sdt,idlop,ngaysinh,donghp) select '$id','$ten','$email','$sdt','$lop','$ngaysinh','$donghp' from lop where lop.id='".$lop."'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function getonehv($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT hocvien.id, tenhv,email,sdt,ngaysinh,tenlop,donghp,idlop FROM hocvien inner join lop on lop.id=hocvien.idlop where hocvien.id='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function kiem_trahv($chuoi) {
        // Duyệt qua từng kí tự trong chuỗi
        for ($i = 0; $i < strlen($chuoi); $i++) {
            // Kiểm tra xem kí tự có phải là số hay không
            if (ctype_digit($chuoi[$i])) {
                // Nếu có ít nhất một kí tự là số, trả về false
                return false;
            }
        }
    
        // Nếu mọi kí tự đều không phải số, trả về true
        return true;
    }
    function kiem_traidhv($id) {
        $ds=getall_gv();
        foreach($ds as $tim){
            if($tim['id']==$id){
                return false;
            }
        }
        return true;
    }
    function getall_lop(){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM lop");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
   function getone_baihoc($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM baihoc inner join chuongtrinh on chuongtrinh.id=baihoc.idct
                 inner join lop on lop.idct=chuongtrinh.id inner join hocvien on hocvien.idlop=lop.id where hocvien.id='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
   }
   function getbh($idbh){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT * FROM baihoc where baihoc.idbh='".$idbh."'");
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
    function update_ng($id,$ten,$email,$user,$pass){
        $conn=connectdb();
        $sql = "UPDATE nguoidung SET ten='".$ten."',email='".$email."',user='".$user."',pass='".$pass."' WHERE id='".$id."'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function getone_ng($id){
        $conn=connectdb();
        $stmt = $conn->prepare("SELECT nguoidung.id,nguoidung.ten,user,pass,nguoidung.email FROM hocvien inner join nguoidung on nguoidung.id=hocvien.id where hocvien.id='".$id."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    
?>