<?php 
  if(is_array($ngct)){
    extract($ngct);
  }
  //var_dump($dslop);
  //var_dump($ngct);
  foreach($ngct as $ds){
?>
<div class='dashboard-content'>
  <div class='container'>           
    <div class='card'>
        <div class='card-body'>
          <div class="row rowstyle tieudeupdate">
            <div class="col" >
              <h3 >Sửa thông tin cá nhân</h3>
            </div> 
          </div>
          <form action="indexhv.php?act=update" method="post" enctype="multipart/form-data">
          <div class="row rowstyle" >
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Mã học viên" name="ma" disable value="<?php echo $ds['id'];?>" readonly>
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Họ Tên" name="hoten" value="<?php if(isset($ds['ten'])&&($ds['ten']!="")) echo $ds['ten'];?>">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv">
              <input type="email" class="form-control form" placeholder="Nhập email" name="email" value="<?php if(isset($ds['email'])&&($ds['email']!="")) echo $ds['email'];?>">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="text" class="form-control form" placeholder="Nhập số điện thoại" name="user"  value="<?php if(isset($ds['user'])&&($ds['user']!="")) echo $ds['user'];?>">
            </div>
            <div class="col col-sm-4 col-md-4 col-lg-4 updategv" >
              <input type="password" class="form-control form" placeholder="Nhập số điện thoại" name="pass"  value="<?php if(isset($ds['pass'])&&($ds['user']!="")) echo $ds['pass'];?>">
            </div>
              <!--Nút gửi-->
              <div class="container button">
              <div class="col-sm-12 col-md-12 col-lg-12 updatebt">
                <input type="hidden" name="id" value="<?php if(isset($ds['id'])&&($ds['id']>0)) echo $ds['id'];}?>">
                <input type="submit" class="btn btn-outline-dark" value="Sửa thông tin" name="capnhatnghv">
              </div>
            </div>
          </div>
          </form>
        </div>
    </div>
  </div>