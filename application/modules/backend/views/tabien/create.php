<div id="content-wrapper">
    <div id="content">
        <?php $this->load->view('topbar') ?>
    </div>

    <div class="row m-0 p-0">
        <div class="col-12">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title">เพิ่มข้อมูลทะเบียนรถ</h4>
                </div>
                <form action="">
                    <div class="my-1 p-3 row">
                        <div class="col-12 col-sm-6">
                            <label for="">เลขทะเบียน</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="เลขทะเบียน" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="my-4">
                            <label for="">อัพโหลดรูปภาพ</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="inputGroupSelect01">ชนิดของป้าย</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>เลือก...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <label for="">ผลรวม</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ผลรวมทะเบียน" aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <label for="">รายละเอียด</label>
                            <div class="input-group mb-3">
                                <textarea type="text" class="form-control" placeholder="รายละเอียดทะเบียน" aria-label="Username" aria-describedby="basic-addon1"></textarea>
                            </div>
                            <label for="">ราคา</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="ราคาล่าสุด" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <label for="inputGroupSelect01">โปรโมชั่น</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>เลือก...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <label for="inputGroupSelect01">สถานะ</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01">
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