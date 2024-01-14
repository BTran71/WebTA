<?php 
  if(is_array($bh)){
    extract($bh);
  }
  //var_dump($bh);
  ?>
<div class='dashboard-content'>
                <div class='container-fluid'>
                    <div class="row" >
                            <div class='card'>
                                <div class='card-body'>
                                <?php foreach($bh as $ds){?>
                                  <h2 style="text-align:center"><?php echo $ds['tenbh'];?></h3>
                                  <div class="row video">
                                    <video id="myVideo"  controls>
                                      <source src="<?php echo $ds['video']; ?>" type="video/mp4">
                                </video>
                               
                                  </div>
                                    <div class="row video">
                                    <?php echo $ds['chitiet'];}?>
                                </div>
                            </div>
                          </div>
  </div>
  <script>
        var video = document.getElementById("myVideo");
        var progressBar = document.getElementById("progressBar");
        var progress = document.getElementById("progress");

        video.addEventListener("timeupdate", updateProgressBar);

        progressBar.addEventListener("click", seek);

        function updateProgressBar() {
            var value = (video.currentTime / video.duration) * 100;
            progress.style.width = value + "%";
        }

        function seek(e) {
            var percent = e.offsetX / progressBar.offsetWidth;
            video.currentTime = percent * video.duration;
        }
    </script>