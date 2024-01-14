<?php 
  if(is_array($tkb)){
    extract($tkb);
  }
  //var_dump($tkb);
  ?>
<div class='dashboard-content'>
                    <div class='card'>
                        <div class='card-body'>
                            <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">Thứ</th>
                                    <th scope="col">Thời gian học</th>
                                    <th scope="col">Ngày bắt đầu</th>
                                    <th scope="col">Ngày kết thúc</th>
                                  </tr>
                                </thead>
                                <?php 
                                  if(isset($tkb)&&(count($tkb)>0)){
                                      foreach($tkb as $ds){
                                         echo '<tbody>
                                        <tr>
                                          <th>'.$ds['thu'].'</th>
                                          <td>'.$ds['bd'].'-'.$ds['kt'].'</td>
                                          <td>'.$ds['thoigianbd'].'</td>
                                          <td>'.$ds['thoigiankt'].'</td>';
                                        }
                                    } ?>
                                         