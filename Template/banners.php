<!-- Owl-carousel -->
<section id="banner-area">
    <div class="owl-carousel owl-theme">
        <?php foreach ($result as $row ) {     
       ?>
        <div class="item">
            <img src="<?php echo $row['banner_image'];?>"  alt="Banner1">
        </div>
        
        <?php  } ?>
    </div>
</section>
<!-- !Owl-carousel -->
