
<div class="container mt-4 khoangcach">
          <div id="demo" class="carousel slide" data-bs-ride="carousel">


<section class="header"> 
  <div class="text-box">
      <h3>Các khóa học</h3>
  </div>
</section>

    <div class="container mt-4">
      <div class="row" >
        <div class='mt-4 p-5 introduce text-white rounded'>
        <?php 
          if(isset($kq)&&(count($kq)>0)){
            foreach($kq as $ds){
             echo "
                <div class='col-sm-12 col-md-4 col-lg-4 khunghinh'>
                <a href='index.php?act=chitietct&id=".$ds['id']."'>
                  <div class='card'>
                    <img class='card-img-top hinh' src='".$ds['img']."'alt='Card image'>
                    <div class='card-body'>
                      <p class='chu'><b>".$ds['tenct']."</b></p>
                      <p>".$ds['mota']."</p>
                    </div>
                  </div>
                </div></a>
              ";
            }
          }?>
        </div> 
      </div>  
    </div>   
</div>