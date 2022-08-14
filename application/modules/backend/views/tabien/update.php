<div id="content-wrapper">
    <div id="content">
        <?php $this->load->view('topbar') ?>
    </div>

    <div class="row m-0 p-0">
        <div class="col-12">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title m-0">เพิ่มข้อมูลทะเบียนรถ</h4>
                </div>
                <form action="<?php echo base_url('backend/tabien/add_tabien') ?>" method="post">
                    <div class="my-1 p-3 row">
                        <div class="col-12 col-sm-6">
                            <label for="">เลขทะเบียน</label>
                            <div class="input-group mb-3">
                                <input type="text" name="t_name" class="form-control" placeholder="เลขทะเบียน">
                            </div>
                            <div class="">
                                <label for="">อัพโหลดรูปภาพ</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="inputGroupSelect01">ชนิดของป้าย</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" name="t_type" id="inputGroupSelect01">
                                    <option selected>เลือก...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <label for="">ผลรวม</label>
                            <div class="input-group mb-3">
                                <input type="text" name="t_score" class="form-control" placeholder="ผลรวมทะเบียน">
                            </div>

                            <label for="">รายละเอียด</label>
                            <div class="input-group mb-3">
                                <textarea type="text" class="form-control" name="t_detail" placeholder="รายละเอียดทะเบียน"></textarea>
                            </div>
                            <label for="">ราคา</label>
                            <div class="input-group mb-3">
                                <input type="text" name="t_price" class="form-control" placeholder="ราคาล่าสุด">
                            </div>
                            <label for="inputGroupSelect01">โปรโมชั่น</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" name="t_promotion_id" id="inputGroupSelect01">
                                    <option selected>เลือก...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <label for="inputGroupSelect01">สถานะ</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" name="t_status" id="inputGroupSelect01">
                                    <option selected>เลือก...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 ">
                                <button class="btn btn-primary w-100">บันทึกข้อมูล</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>