
<div class='dashboard-content'>
    <div class='container'>
        <div class='card'>
            <div class='card-body'>
                <div class="row">
            
                <?php 
                 if(is_array($bhct)){
                    extract($bhct);
                  }
                 // var_dump($bhct);
                  foreach($bhct as $ds){
                echo "<div class='col-sm-6 col-lg-4 col-md-4'>
                <a href='indexhv.php?act=chitietbh&idbh=".$ds['idbh']."' class='btn khung'>
                    <div class='card baihoc'>
                        <img class='card-img-top ' src='".$ds['imgbh']."'>
                        <div class='card-body'>
                            <p><b>'".$ds['tenbh']."'</b></p>
                            <form  method='get' enctype='multipart/form-data'>
                            </form>
                        </div>
                    </div>
                    </div></a>";
                }
                ?> 

                </div>
            </div>
        </div>
    </div>
</div>