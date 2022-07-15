<?php
include('include/header.php');
// include 'signin.php';
?>
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
  <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
    <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Khám phá 5000+ việc làm mới hàng tháng</p>
    <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Việc Làm 24h<br><span class="small">Tuyển dụng & tìm việc 24/7</span></h1>

    <div class="ftco-search">
      <div class="row">
        <div class="col-md-12 nav-link-wrap">
          <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Tìm Việc Làm</a>
          </div>
        </div>
        <div class="col-md-12 tab-wrap">

          <?php
          include('connection/db.php');
          $query = mysqli_query($conn, "select * from job_category");
          ?>

          <div class="tab-content p-4" id="v-pills-tabContent">

            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
              <form action="#recent_job" method="POST" class="search-job">
                <div class="row">
                  <div class="col-md">
                    <div class="form-group">
                      <div class="form-field">
                        <div class="icon"><span class="icon-briefcase"></span></div>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Nhập Tên Công Việc">
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="category" id="category" class="form-control">
                            <option hidden selected value="">Chọn Ngành Nghề</option>
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                              <option value="<?php echo $row['category'] ?>"><?php echo $row['category'] ?></option>

                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <div class="form-field">
                        <div class="icon"><span class="icon-map-marker"></span></div>
                        <input type="text" name="location" id="location" class="form-control" placeholder="Địa Điểm">
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <div class="form-field">
                        <input type="submit" value="Tìm Kiếm" name="search" class="form-control btn btn-primary">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php

if (isset($_POST['search'])) {
  $title = $_POST['title'];
  $category = $_POST['category'];
  $location = $_POST['location'];

  $sql = mysqli_query($conn, "SELECT * FROM jobs 
    WHERE job_title LIKE '%$title%' AND category LIKE '%$category%' AND job_location LIKE '%$location%' ORDER BY job_id DESC");
} else {
  $sql = mysqli_query($conn, "SELECT * FROM jobs ORDER BY job_id DESC");
}


?>

<section class="ftco-section services-section bg-light">
  <div class="container">
    <!-- <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Tại sao nên chọn Việc Làm 24h</span>
        <h2 class="mb-4"><span>Tính Năng</span> Nổi Bật</h2>
      </div>
    </div> -->
    <div class="row d-flex">
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-resume"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Tìm kiếm hàng triệu việc làm</h3>
            <p>Công cụ hỗ trợ đầy đủ, thông báo việc làm tiện lợi. Tổng đài tư vấn dành riêng cho Người tìm việc.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-collaboration"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Dễ dàng quản lý công việc</h3>
            <p>Chăm sóc và tư vấn 1-1 với với nhà tuyển dụng. Kết nối nhanh chóng, tìm kiếm việc làm dễ dàng.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-promotions"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Nghề nghiệp hàng đầu</h3>
            <p>Việc làm tốt nhất từ những nhà tuyển dụng hàng đầu. Cập nhật liên tục 24/7.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-employee"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Tìm kiếm ứng viên chuyên gia</h3>
            <p>Hàng triệu ứng viên chất lượng, thông tin hồ sơ ứng viên được kiểm duyệt chặt chẽ.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-counter">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Hạng mục công việc dành cho bạn</span>
        <h2 class="mb-4"><span>Ngành Nghề</span> Nổi Bật</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">Công nghệ thông tin <span class="number" data-number="8000">0</span></a></li>
          <li><a href="#">Thiết kế đồ họa <span class="number" data-number="1000">0</span></a></li>
          <li><a href="#">Marketing <span class="number" data-number="2000">0</span></a></li>
          <!-- <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li> -->
        </ul>
      </div>
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">Dịch vụ khách hàng <span class="number" data-number="5500">0</span></a></li>
          <li><a href="#">Bất động sản <span class="number" data-number="1560">0</span></a></li>
          <li><a href="#">Du lịch <span class="number" data-number="1000">0</span></a></li>
          <!-- <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li> -->
        </ul>
      </div>
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">Ngân hàng / Tài chính <span class="number" data-number="3500">0</span></a></li>
          <li><a href="#">Điện tử viễn thông <span class="number" data-number="2000">0</span></a></li>
          <li><a href="#">Kiến trúc <span class="number" data-number="800">0</span></a></li>
          <!-- <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li> -->
        </ul>
      </div>
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">Khách sạn / Nhà hàng <span><span class="number" data-number="1000">0</span></span></a></li>
          <li><a href="#">Giáo dục / Đào tạo <span class="number" data-number="4000">0</span></a></li>
          <li><a href="#">Môi trường <span class="number" data-number="3300">0</span></a></li>
          <!-- <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li> -->
        </ul>
      </div>
    </div>
  </div>
</section>



<section class="ftco-section bg-light" id="recent_job">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Các bài đăng gần đây</span>
        <h2 class="mb-4" id="result"><span>Tin</span> Tuyển Dụng</h2>
        <h2 class="mb-4" id="no_result" style="display: none">Không tìm thấy kết quả phù hợp Vui lòng thử lại</h2>
      </div>
    </div>

    <?php
    while ($row = mysqli_fetch_array($sql)) { ?>

      <div class="col-md-12 ftco-animate">
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0 mr-5">
            <div class="job-post-item-header d-flex align-items-center">
              <h2 class="mr-3 text-black h3"><?php echo $row['job_title'] ?></h2>
              <div class="badge-wrap">
                <span class="bg-success text-white badge py-2 px-3"><?php echo $row['job_type'] ?></span>
              </div>
            </div>
            <div class="job-post-item-body d-block d-md-flex">
              <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['company'] ?></a></div>
              <div><span class="icon-my_location"></span> <span><?php echo $row['job_location']; ?></span></div>
            </div>
          </div>

          <div class="ml-auto d-flex">
            <a href="job_single.php?id=<?php echo $row['job_id'] ?>" class="btn btn-primary py-2 mr-1">Ứng tuyển</a>
            <a href="#" class="btn btn-danger rounded-circle btn-favorite d-flex align-items-center">
              <span class="icon-heart"></span>
            </a>
          </div>
        </div>
      </div>

    <?php } ?>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul id="num_ul">
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

  <?php
  if (!mysqli_num_rows($sql)) {
  ?>

    <script>
      var result = document.getElementById('result');
      var no_result = document.getElementById('no_result');
      var num_ul = document.getElementById('num_ul');
      result.style.display = 'none';
      num_ul.style.display = 'none';
      no_result.style.display = 'block';
    </script>

  <?php
  }
  ?>

  </div>
</section>







<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Hàng nghìn doanh nghiệp uy tín đang tìm kiếm ứng viên</span>
        <h2 class="mb-4"><span> Nhà Tuyển Dụng</span> Nổi Bật</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap py-4 pb-5">
              <div class="user-img mb-4 border border-primary" style="background-image: url(images/fb.png)">
              </div>
              <div class="text">
                <p class="mb-4">We work on things we’re incredibly passionate about, that align with our values and purpose, and that have a positive impact on the world. It's who we are. It's why we build.</p>
                <p class="name">Facebook Inc.</p>
                <span class="position">Mark Zuckerberg</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4 pb-5">
              <div class="user-img mb-4 border border-primary" style="background-image: url(images/fpt.png)">
              </div>
              <div class="text">
                <p class="mb-4">FPT Software is the global leading technology and IT services group headquartered in Vietnam with nearly US$2 billion in revenue and 32000 employees.</p>
                <p class="name">FPT Software</p>
                <span class="position">Phạm Minh Tuấn</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4 pb-5">
              <div class="user-img mb-4 border border-primary" style="background-image: url(images/amazon.png)">
              </div>
              <div class="text">
                <p class="mb-4">Amazon owns over 40 subsidiaries, including Audible, Diapers.com, Goodreads, IMDb, Kiva Systems (now Amazon Robotics), Shopbop, Teachstreet, Twitch and Zappos.</p>
                <p class="name">Amazon Inc.</p>
                <span class="position">Andy Jassy</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4 pb-5">
              <div class="user-img mb-4 border border-primary" style="background-image: url(images/vnpt.png)">
              </div>
              <div class="text">
                <p class="mb-4">Tập đoàn Bưu chính Viễn thông Việt Nam là một doanh nghiệp của nhà nước chuyên về đầu tư, sản xuất, kinh doanh trong lĩnh vực Viễn thông và Công nghệ thông tin tại Việt Nam. </p>
                <p class="name">VNPT</p>
                <span class="position">Phạm Đức Long</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4 pb-5">
              <div class="user-img mb-4 border border-primary" style="background-image: url(images/ms.png)">
              </div>
              <div class="text">
                <p class="mb-4">Microsoft Corporation is an American multinational technology corporation which produces computer software, consumer electronics, personal computers.</p>
                <p class="name">Microsoft</p>
                <span class="position">Satya Nadella</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('include/footer.php');
?>