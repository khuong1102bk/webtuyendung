<?php
include('include/header.php');
include('connection/db.php');
?>


<?php
$sql = mysqli_query($conn, "SELECT * FROM  recruiter where email='{$_SESSION['email']}'");
while ($row = mysqli_fetch_array($sql)) {
    $id = $row['id'];
    $email = $row['email'];
    $password = $row['password'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $company = $row['company'];
    $address = $row['address'];
    $mobile_number = $row['mobile_number'];
    $file = $row['img'];
}
?>

<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
    <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Trang Chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Quản lý đơn ứng tuyển</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Đơn Ứng Tuyển</h1>
    </div>
</div>
</div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="col-md-12">
            <h2 class="h3 mb-4">Công Ty <?php echo $company ?></h2>
        </div>
        <div class="row block-9 bg-white p-5">
            <h2 class="h3">Danh sách đơn ứng tuyển</h2>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>

                        <th>STT</th>
                        <th>Tên công việc</th>
                        <th>Người nộp đơn</th>
                        <th>Email</th>
                        <th>Kinh nghiệm</th>
                        <th>Trạng thái đơn</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php


                    $query = mysqli_query($conn, "select * from job_apply cross join jobs ON job_apply.id_job = jobs.job_id where customer_email='{$_SESSION['email']}'");
                    $i = 0;
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <tr>


                            <td><?php echo ++$i; ?></td>
                            <td><?php echo $row['job_title']; ?></td>
                            <td><?php echo $row['last_name']; ?> <?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['job_seeker']; ?></td>
                            <td><?php echo $row['job_exp']; ?></td>
                            <td><?php echo $row['status']; ?></td>


                            <td>


                                <a href="job_applications_edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fas fa-address-card"></i></a>
                                <a onclick="return confirm('Xóa hàng này?')" href="job_applications_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>



                            </td>


                        </tr>

                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</section>



<?php

include('include/footer.php');
?>