<?php 
  if(is_array($ct)){
    extract($ct);
  }
  //var_dump($ct);
  ?>
<div class="container">
    <div class="row rowkhung" >
                <?php if(!empty($ct)){?>
               
                <h2 style="text-align:center"><?php echo $ct[0]['tenct'];?></h3>
                <p class="chitiet">Chương trình phù hợp với tất cả các lứa tuổi khác nhau theo nhiều đối tượng học sinh,
                     sinh viên, văn phòng với các học viên có nhu cầu học thêm về ngoại ngữ nâng cao trình độ học tập</p>
                <p class="chitiet">Học phí: <?php echo $ct[0]['hocphi'];}?> đồng</p>
                <p class="chitiet">Ở đây có các khung giờ học để học viên có thể lựa chọn giờ học phù hợp với mình</p>
                <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Thứ</th>
                                    <th scope="col">Thời gian học</th>
                                    <th scope="col">Ngày bắt đầu</th>
                                    <th scope="col">Ngày kết thúc</th>
                                  </tr>
                                </thead>
                                <?php foreach($ct as $ds=>$value){?>
                                <tr>
                                          <th><?php echo $value['thu'];?></th>
                                          <td><?php echo $value['bd'].'-'.$value['kt'];?></td>
                                          <td><?php echo $value['thoigianbd'];?></td>
                                          <td><?php echo $value['thoigiankt'];}?></td>
                                </tr>
                </table>
                <h3 style="text-align:center">ĐỘI NGŨ GIÁO VIÊN GIÀU KINH NGHIỆM</h3>
                <p class="chitiet">Đội ngũ giáo viên dày dặn kinh nghiệm được tuyển chọn kỹ lưỡng với sự thấu hiểu tâm lý học viên ở từng độ tuổi. 
                    Luôn đổi mới phương pháp giảng dạy nhằm tạo nên môi trường học tập hấp dẫn và thú vị cho các học viên.</p>
                <h3 style="text-align:center">Hãy liên hệ ngay với trung tâm để nhận được các ưu đãi ngay bây giờ</h3>
                <div class="container">
    <form action="index.php?act=dangkyform" method="post" enctype="multipart/form-data">
      <div class="row rowstyle" >
        <div class="col" >
          <input type="text" class="form-control form" placeholder="Họ và tên" name="hoten">
        </div>
        <div class="col">
          <input type="email" class="form-control form" placeholder="Nhập email" name="email">
        </div>
      </div>
      <div class="row rowstyle" >
        <div class="col" >
          <input type="text" class="form-control form" placeholder="Nhập số điện thoại" name="sdt">
        </div>
        <div class="col">
          <input type="text" class="form-control form" placeholder="Tỉnh/Thành phố" name="tinh">
        </div>
      </div>
      <div class="container button">
        <div class="col-sm-12 col-md-12 col-lg-12 submitbutton">
          <input type="submit" class="btn btn-outline-dark" value="Gửi thông tin" name="dangky">
        </div>
      </div>
    </form>
  </div>
    </div>
</div>
    