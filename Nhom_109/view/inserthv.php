<div class='dashboard-content'>
  <div class='container'>
                
    <div class='card'>
        <div class='card-body'>
          <div class="row rowstyle tieudeupdate" >
            <div class="col" >
              <h3 >Thêm thông tin học viên</h3>
            </div> 
          </div>
          <form action="indexadmin.php?act=hv_insert" method="post" enctype="multipart/form-data">
          <div class="row rowstyle" >
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Mã học viên" name="ma" >
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Họ Tên" name="hoten">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
              <input type="email" class="form-control form" placeholder="Nhập email" name="email" >
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Nhập số điện thoại" name="sdt">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
            <input type="text" class="form-control form" placeholder="Ngày sinh" name="ngaysinh">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
              <select class="form-select" id="sel1" name="lop">
              <?php 
              $dslop=getall_lop();
              echo "<option value=''>Nhấn để chọn</option>";
                  foreach($dslop as $class){
                    if(isset($class['tenlop'])&&($class['tenlop']!="")) 
                        echo "<option value='".$class['id']."'>'".$class['tenlop']."'</option>";
                  }?>
                </select>
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
                <select class="form-select" id="sel2" name="donghp">
                <option value="">Hãy chọn...</option>
                <option value=1>Đã đóng học phí</option>
                <option value=0>Chưa đóng học phí</option>
                </select>
            </div>
             <!--Nút gửi-->
        <div class="container button">
          <div class="col-sm-12 col-md-12 col-lg-12 updatebt">
            <input type="submit" class="btn btn-outline-dark" value="Thêm thông tin" name="themhv">
          </div>
        </div>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>