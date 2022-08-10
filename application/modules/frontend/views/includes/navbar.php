<style>
    .navbar-brand>img {
        width: 20px;
    }
</style>

<div class="header">
    <div class="container mb-4 ">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container-fluid m-0 p-0 ">
                <a class="navbar-brand p-0" href="#">
                    <img class="lazy" src="<?= base_url('issets/img/logo/logo.png') ?>" alt="">
                    มงคลทะเบียนรถ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-sm-flex justify-content-between" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
                        <a class="nav-link" href="#">สินค้า</a>
                        <a class="nav-link" href="#">ขั้นตอนการสั่งซื้อ</a>
                        <a class="nav-link ">ติดต่อเรา</a>
                    </div>
                    <div class="d-flex justify-content-between col-12 col-sm-4  m-0 p-0 mt-2 mt-sm-0">
                        <!-- <div class="my-auto"><i class="fas fa-cart-arrow-down"><span></span></i></div> -->
                        <a href="<?php echo base_url('Backend') ?>" class="btn btn-success w-100 m-1">สมัครสมาชิก</a>
                        <div class=" btn btn-transparent text-success border border-success w-100 m-1">เข้าสู่ระบบ</div>
                    </div>

                </div>
            </div>
        </nav>

    </div>

</div>