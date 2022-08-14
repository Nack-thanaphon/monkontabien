<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('backend') ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('issets/img/logo/logo.png') ?>" style="width:30px;" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">มงคลทะเบียน</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('backend') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        จัดการทะเบียนรถ
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>จัดการทะเบียนรถ</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">จัดการทะเบียน</h6>
                <a class="collapse-item" href="<?php echo base_url('backend/tabien') ?>">เพิ่ม-แก้ไขทะเบียน</a>
                <a class="collapse-item" href="cards.html">สถิติทะเบียน</a>
            </div>
        </div>

    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>จัดการโปรโมชั่น</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Promotion:</h6>
                <a class="collapse-item" href="utilities-animation.html">เพิ่ม-แก้ไขโปรโมชั่น</a>
                <a class="collapse-item" href="utilities-color.html">โปรโมชั่น ประจำเดือน</a>
                <a class="collapse-item" href="utilities-border.html">ประวัติโปรโมชั่น</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#numbermonkon" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>จัดการวิเคราะห์ตัวเลข</span>
        </a>
        <div id="numbermonkon" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">บทความ & คาถา:</h6>
                <a class="collapse-item" href="utilities-color.html">รีวิวลูกค้า</a>
                <a class="collapse-item" href="utilities-color.html">วิเคราะห์ตัวเลข</a>
                <a class="collapse-item" href="utilities-border.html">บทความทั่วไป</a>
                <a class="collapse-item" href="utilities-animation.html">คาถา</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-user-friends"></i>
            <span>จัดการสมากชิก</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">จัดการสมาชิก:</h6>
                <a class="collapse-item" href="404.html"><i class="fas fa-user-cog"></i> เพิ่ม-ลบแก้ไขสมาชิก</a>
                <a class="collapse-item" href="register.html"><i class="fas fa-user-clock"></i> สมาชิกรอการอนุมัติ</a>
                <h6 class="collapse-header">ประวัติ:</h6>
                <a class="collapse-item" href="blank.html"><i class="fas fa-stream"></i> สถิติการใช้งาน</a>
                <a class="collapse-item" href="forgot-password.html"><i class="fas fa-file-alt"></i> ประวัติการใช้งาน</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>