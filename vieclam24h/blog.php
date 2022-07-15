<?php
include('include/header.php');

$query = mysqli_query($conn, "select * from blog");

?>
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Trang Chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row d-flex">
    <?php
    while ($row = mysqli_fetch_array($query)) { ?>
      <div class="col-md-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="#" class="block-20 border" style="background-image: url('images/<?php echo $row['img'] ?>');">
          </a>
          <div class="text mt-3">
            <div class="meta mb-2">
              <div><a href="#">20 THÁNG 09/2021</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#"><?php echo $row['title'] ?></a></h3>
            <p><?php echo $row['sub_title'] ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
include('include/footer.php');
?>